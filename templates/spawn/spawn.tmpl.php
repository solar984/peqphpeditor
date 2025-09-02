<?if($spawngroups == ''):?>
    <table class="edit_form">
      <tr>
        <td class="edit_form_header">No spawngroup assigned</td>
      </tr>
      <tr>
        <td class="edit_form_content">
          To create a spawngroup for this NPC:<br>
          <ul style="padding-left: 25px;">
            <li>Make sure the desired zone is selected from the search bar</li>
            <li><a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcid?>&action=54">Click here to create a new spawngroup</a></li>
            <li><a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcid?>&action=16">Click here to add this NPC an existing spawngroup</a></li>
            <li><a href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcid?>&action=80">Click here to import spawnpoints from Magelo</a></li>
          </ul>
        </td>
      </tr>
    </table>
<?endif;?>
<?php if (!empty($spawngroups)): ?>
    <table class="edit_form">
        <tr>
            <td class="edit_form_header">Spawngroup options</td>
        </tr>
        <tr>
            <td class="edit_form_content">
                <ul style="padding-left: 25px;">
                    <li>
                        <a href="index.php?editor=spawn&z=<?= $currzone ?? "" ?>&zoneid=<?= $currzoneid ?? "" ?>&npcid=<?= $npcid ?>&action=54">Click
                            here to create a new spawngroup</a></li>
                    <li>
                        <a href="index.php?editor=spawn&z=<?= $currzone ?? "" ?>&zoneid=<?= $currzoneid ?? "" ?>&npcid=<?= $npcid ?>&action=16">Click
                            here to add this NPC to an existing spawngroup</a></li>
                    <li>
                        <a href="index.php?editor=spawn&z=<?= $currzone ?? "" ?>&zoneid=<?= $currzoneid ?? "" ?>&npcid=<?= $npcid ?>&action=80">Click
                            here to import spawnpoints from Magelo</a></li>
                </ul>
            </td>
        </tr>
    </table><br/>
    <?php foreach ($spawngroups as $sg): extract($sg); ?>
        <div style="border: 1px solid black; margin-bottom: 15px;">
            <div class="table_header">
                <table style="width: 100%; border-collapse: collapse; border-spacing: 0;">
                    <tr>
                        <td style="padding: 0;">
                            Spawngroup <a href="index.php?editor=spawn&z=<?= $currzone ?>&zoneid=<?= $currzoneid ?>&npcid=<?= $npcID ?>&sid=<?= $spawngroupID ?>&action=4"><?= $spawngroupID ?? 0 ?></a>
                            - <?= $name ?? "Undefined" ?>
                        </td>
                        <td style="padding: 0;">
                            spawn_limit: <a
                                    href="index.php?editor=spawn&z=<?= $currzone ?>&zoneid=<?= $currzoneid ?>&npcid=<?= $npcID ?>&sid=<?= $spawngroupID ?>&action=4"><?= $spawn_limit ?? 0 ?></a>
                        </td>
                        <td style="padding: 0;">
                            <a href="index.php?editor=spawn&z=<?= $currzone ?>&zoneid=<?= $currzoneid ?>&npcid=<?= $npcID ?>&sid=<?= $spawngroupID ?>&action=10">View
                                Spawnpoints (<?= $count ?>) for this Spawngroup</a>
                        </td>
                        <td style="padding: 0; text-align: right;">
                            <a href="index.php?editor=spawn&z=<?= $currzone ?>&zoneid=<?= $currzoneid ?>&npcid=<?= $npcID ?>&sid=<?= $spawngroupID ?>&action=8"><img
                                        src="images/add.gif" style="border: 0;" alt="Add Icon"
                                        title="Add an NPC to this Spawngroup"></a>&nbsp;
                            <a onClick="return confirm('Really delete this spawngroup?\n  THIS WILL DELETE ALL OF THIS SPAWNGROUP\'S SPAWNPOINTS, AS WELL!');"
                               href="index.php?editor=spawn&z=<?= $currzone ?>&zoneid=<?= $currzoneid ?>&npcid=<?= $npcID ?>&sid=<?= $spawngroupID ?>&action=6"><img
                                        src="images/remove2.gif" style="border: 0;" alt="Delete Spawngroup Icon"
                                        title="Delete this Spawngroup"></a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="table_header">
                <table style="width: 100%; border-collapse: collapse; border-spacing: 0;">
                    <tr>
                        <td style="padding: 0; width: 10%">
                            WP Spawns: <a
                                    href="index.php?editor=spawn&z=<?= $currzone ?>&zoneid=<?= $currzoneid ?>&npcid=<?= $npcID ?>&sid=<?= $spawngroupID ?>&action=4"><?php echo !empty($wp_spawns) ? "Enabled" : "Off"; ?></a>
                        </td>
                        <td style="padding: 0; width: 10%">
                            min_x: <a
                                    href="index.php?editor=spawn&z=<?= $currzone ?>&zoneid=<?= $currzoneid ?>&npcid=<?= $npcID ?>&sid=<?= $spawngroupID ?>&action=4"><?= $min_x ?? 0 ?></a>
                        </td>
                        <td style="padding: 0; width: 10%">
                            max_x: <a
                                    href="index.php?editor=spawn&z=<?= $currzone ?>&zoneid=<?= $currzoneid ?>&npcid=<?= $npcID ?>&sid=<?= $spawngroupID ?>&action=4"><?= $max_x ?? 0?></a>
                        </td>
                        <td style="padding: 0; width: 10%">
                            min_y: <a
                                    href="index.php?editor=spawn&z=<?= $currzone ?>&zoneid=<?= $currzoneid ?>&npcid=<?= $npcID ?>&sid=<?= $spawngroupID ?>&action=4"><?= $min_y ?? 0?></a>
                        </td>
                        <td style="padding: 0; width: 10%">
                            max_y: <a
                                    href="index.php?editor=spawn&z=<?= $currzone ?>&zoneid=<?= $currzoneid ?>&npcid=<?= $npcID ?>&sid=<?= $spawngroupID ?>&action=4"><?= $max_y ?? 0 ?></a>
                        </td>
						<td style="padding: 0; width: 10%">
							dist: <a 
									href="index.php?editor=spawn&z=<?=$currzone?>&zoneid=<?=$currzoneid?>&npcid=<?=$npcID?>&sid=<?=$spawngroupID?>&action=4"><?=$dist?? 0 ?></a>
						</td>
                    </tr>
                </table>
            </div>
            <div class="table_header">
                <table style="width: 100%; border-collapse: collapse; border-spacing: 0;">
                    <tr>
                        <td style="padding: 0; width: 25%">
                            mindelay: <a
                                    href="index.php?editor=spawn&z=<?= $currzone ?>&zoneid=<?= $currzoneid ?>&npcid=<?= $npcID ?>&sid=<?= $spawngroupID ?>&action=4"><?= $mindelay ?? 0 ?></a>
                        </td>
                        <td style="padding: 0; width: 25%">
                            delay: <a
                                    href="index.php?editor=spawn&z=<?= $currzone ?>&zoneid=<?= $currzoneid ?>&npcid=<?= $npcID ?>&sid=<?= $spawngroupID ?>&action=4"><?= $delay ?? 0 ?></a>
                        </td>
                        <td style="padding: 0; width: 25%">
                            despawn: <a
                                    href="index.php?editor=spawn&z=<?= $currzone ?>&zoneid=<?= $currzoneid ?>&npcid=<?= $npcID ?>&sid=<?= $spawngroupID ?>&action=4"><?= isset($despawn) ? $despawntype[$despawn] : "None" ?></a>
                        </td>
                        <td style="padding: 0; width: 25%">
                            despawn timer: <a
                                    href="index.php?editor=spawn&z=<?= $currzone ?>&zoneid=<?= $currzoneid ?>&npcid=<?= $npcID ?>&sid=<?= $spawngroupID ?>&action=4"><?= $despawn_timer ?? 0 ?></a>
                        </td>
                    </tr>
                </table>
            </div>
             <?php if (!empty($npcs)): ?>
                <div class="table_content2" style="padding: 0;">
                    <table style="width: 100%; border-collapse: collapse: border-spacing: 0;">
                        <tr style="background-color:#AAAAAA">
                            <th width: 30%; align: center;">Name</th>
                            <th width: 15%; align: center;">MinTime</th>
                            <th width: 15%; align: center;">MaxTime</th>
                            <th width: 10%; align: center;">Chance</th> 
							<th width: 15%; align: center;">Flags</th> 
							<th width="15%" align="center">&nbsp;</th>

                        </tr>
                        <?php
                        $x = 0; $chance_total = $chance_total ?? 0;
                        foreach ($npcs as $npc): extract($npc);
                            $chance_total += $chance;
                            ?>
                            <tr style="background-color:#<?php echo ($x % 2 == 1) ? "AAAAAA" : "BBBBBB"; ?>">
                                <td>
                                    <a href="index.php?editor=npc&z=<?= $currzone ?>&zoneid=<?= $currzoneid ?>&npcid=<?= $npcID ?>"><?= $name ?></a>
                                    (<?= $npcID ?>)
                                </td>
                                <td align: center;"><?= $min_time ?></td>
                                <td align: center;"><?= $max_time ?></td>
                                <td align: center;"><?= $chance ?></td>
								<td align: center;"><?echo ($min_expansion > -1 || $max_expansion > -1 || $content_flags != "" || $content_flags_disabled != "") ? "Yes" : "No";?></td>
                                <td align: right;">
                                    <a href="index.php?editor=spawn&z=<?= $currzone ?>&zoneid=<?= $currzoneid ?>&npcid=<?= $npcid ?>&sid=<?= $spawngroupID ?>&sgnpcid=<?= $npcID ?>&action=1"><img
                                                src="images/edit2.gif" alt="Edit Spawngroup Icon"
                                                title="Edit this Spawngroup Member" style="border: 0;"></a>&nbsp;
                                    <a onClick="return confirm('Really delete this NPC from the spawngroup?');"
                                       href="index.php?editor=spawn&z=<?= $currzone ?>&zoneid=<?= $currzoneid ?>&npcid=<?= $npcid ?>&sid=<?= $spawngroupID ?>&sgnpcid=<?= $npcID ?>&action=71"><img
                                                src="images/table.gif" alt="Remove and Balance Icon"
                                                title="Remove this Spawngroup Member and Balance Group"
                                                style="border: 0;"></a>
                                    <a onClick="return confirm('Really delete this NPC from the spawngroup?');"
                                       href="index.php?editor=spawn&z=<?= $currzone ?>&zoneid=<?= $currzoneid ?>&npcid=<?= $npcid ?>&sid=<?= $spawngroupID ?>&sgnpcid=<?= $npcID ?>&action=7"><img
                                                src="images/remove.gif" alt="Remove Spawngroup Member Icon"
                                                title="Remove this Spawngroup Member" style="border: 0;"></a>
                                </td>
                            </tr>
                            <?php
                            $x++;
                        endforeach;
                        ?>
                        <tr style="background-color: #CCCCCC">
                            <td colspan="5" style="text-align: right;">
                                <a href="index.php?editor=spawn&z=<?= $currzone ?>&zoneid=<?= $currzoneid ?>&npcid=<?= $npcid ?>&sid=<?= $spawngroupID ?>&action=3">Balance
                                    Spawn Rates</a>
                                (<?php echo ($chance_total != 100) ? "<strong><span style='color: red'>" : "<span style='color: green'>"; ?>
                                Currently: <?= $chance_total ?>
                                %</span><?php echo ($chance_total != 100) ? "</strong>" : ""; ?>
                                )<?php $chance_total = 0; ?>
                            </td>
                        </tr>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
