<ul class="bx-menu-profile-stats bx-menu-ver bx-menu-object-<?php echo $a['object'];?> bx-def-font-middle bx-clearfix">
    <?php if(is_array($a['bx_repeat:menu_items'])) for($i=0; $i<count($a['bx_repeat:menu_items']); $i++){ ?>
        <li class="bx-menu-item-<?php echo $a['bx_repeat:menu_items'][$i]['name'];?> bx-def-round-corners bx-def-hr bx-def-color-bg-hl-hover <?php echo $a['bx_repeat:menu_items'][$i]['class_add'];?>">
            <div class="bx-menu-item-cnt bx-def-padding-thd-topbottom bx-def-padding-sec-leftright">
                <a href="<?php echo $a['bx_repeat:menu_items'][$i]['link'];?>" onclick="<?php echo $a['bx_repeat:menu_items'][$i]['onclick'];?>"<?php echo $a['bx_repeat:menu_items'][$i]['attrs'];?>>
                    <?php if($a['bx_repeat:menu_items'][$i]['bx_if:icon']['condition']){ ?><i class="sys-icon <?php echo $a['bx_repeat:menu_items'][$i]['bx_if:icon']['content']['icon'];?>"></i><?php } ?>
                    <?php if($a['bx_repeat:menu_items'][$i]['bx_if:image']['condition']){ ?><img style="background-image:url(<?php echo $a['bx_repeat:menu_items'][$i]['bx_if:image']['content']['icon_url'];?>)" src="http://localhost/una-test/template/images/icons/spacer.gif" /><?php } ?>
                    <span class="bx-def-margin-sec-left-auto"><?php echo $a['bx_repeat:menu_items'][$i]['title'];?></span>
                </a>
                <?php if($a['bx_repeat:menu_items'][$i]['bx_if:addon']['condition']){ ?>
                    <div class="bx-menu-addon bx-def-padding-sec-left">
                        <div class="bx-menu-addon-cnt bx-def-label menu"><?php echo $a['bx_repeat:menu_items'][$i]['bx_if:addon']['content']['addon'];?></div>
                    </div>
                <?php } ?>
            </div>
        </li>
    <?php } else if(is_string($a['bx_repeat:menu_items'])) echo $a['bx_repeat:menu_items']; ?>
</ul>
<script language="javascript">
    $(document).ready(function () {
        // add default class to active menu items
        $('.bx-menu-ver > li.bx-menu-tab-active').not('.bx-def-color-bg-active').addClass('bx-def-color-bg-active');
    });
</script>