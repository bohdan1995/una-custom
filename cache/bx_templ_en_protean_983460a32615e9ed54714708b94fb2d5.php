<div id="<?php echo $a['html_id'];?>" class="bx-acl-membeship bx-def-font-align-center">
    <div class="bx-acl-m-title bx-def-font-h3"><?php echo $a['level'];?></div>
    <div class="bx-acl-m-thumbnail bx-def-margin-sec-top"><?php echo $a['thumbnail'];?></div>
    <?php if($a['bx_if:show_private_info']['condition']){ ?>
        <div class="bx-acl-m-info bx-def-margin-sec-top bx-def-font-small">Started:  <b><?php echo $a['bx_if:show_private_info']['content']['date_start'];?></b> Expires:  <b><?php echo $a['bx_if:show_private_info']['content']['date_expire'];?></b><?php if($a['bx_if:show_private_info']['content']['bx_if:show_state']['condition']){ ?><br />State:  <b><?php echo $a['bx_if:show_private_info']['content']['bx_if:show_state']['content']['state'];?></b><?php } ?></div>
    <?php } ?>
</div>