<div class="bx-profile-membership-stats">
    <div class="bx-pms-membership"><?php echo $a['membership'];?></div>
    <div class="bx-pms-stats bx-def-box bx-def-round-corners bx-def-color-bg-box bx-def-padding">
        <?php if(is_array($a['bx_repeat:stat_items'])) for($i=0; $i<count($a['bx_repeat:stat_items']); $i++){ ?>
            <div class="bx-pms-stat-item bx-def-margin-top-auto">
                <div class="bx-pms-si-title"><?php echo $a['bx_repeat:stat_items'][$i]['title'];?></div>
                <div class="bx-pms-si-graph bx-def-margin-thd-top">
                    <div class="bx-pms-sig-bar bx-def-round-corners" style="width:<?php echo $a['bx_repeat:stat_items'][$i]['width'];?>">&nbsp;</div>
                    <div class="bx-pms-sig-text bx-def-padding-left bx-def-font-middle bx-def-font-grayed"><?php echo $a['bx_repeat:stat_items'][$i]['value'];?> (<?php echo $a['bx_repeat:stat_items'][$i]['percent'];?>)</div>
                </div>
            </div>
        <?php } else if(is_string($a['bx_repeat:stat_items'])) echo $a['bx_repeat:stat_items']; ?>
    </div>
</div>