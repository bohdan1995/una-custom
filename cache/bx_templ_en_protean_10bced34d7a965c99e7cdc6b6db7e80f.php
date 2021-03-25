<ul class="bx-menu-floating-blocks bx-menu-object-<?php echo $a['object'];?> bx-clearfix">
    <?php if(is_array($a['bx_repeat:menu_items'])) for($i=0; $i<count($a['bx_repeat:menu_items']); $i++){ ?><li class="bx-menu-item bx-menu-item-<?php echo $a['bx_repeat:menu_items'][$i]['name'];?> bx-def-round-corners bx-def-color-bg-hl-hover bx-def-box-sizing <?php echo $a['bx_repeat:menu_items'][$i]['class_add'];?>">
        <a href="<?php echo $a['bx_repeat:menu_items'][$i]['link'];?>" onclick="<?php echo $a['bx_repeat:menu_items'][$i]['onclick'];?>"<?php echo $a['bx_repeat:menu_items'][$i]['attrs'];?>>
            <div class="bx-menu-floating-blocks-icon">
                <?php if($a['bx_repeat:menu_items'][$i]['bx_if:icon']['condition']){ ?><i class="sys-icon <?php echo $a['bx_repeat:menu_items'][$i]['bx_if:icon']['content']['icon'];?>"></i><?php } ?>
                <?php if($a['bx_repeat:menu_items'][$i]['bx_if:image']['condition']){ ?><img style="background-image:url(<?php echo $a['bx_repeat:menu_items'][$i]['bx_if:image']['content']['icon_url'];?>)" src="http://localhost/una-test/template/images/icons/spacer.gif" /><?php } ?>
            </div>
            <div class="bx-menu-floating-blocks-title"><?php echo $a['bx_repeat:menu_items'][$i]['title'];?></div>
        </a>                
    </li><?php } else if(is_string($a['bx_repeat:menu_items'])) echo $a['bx_repeat:menu_items']; ?>
</ul>

<script language="javascript">
    $(document).ready(function () {
        // add default class to active menu items
        $('.bx-menu-floating-blocks > li.bx-menu-tab-active').not('.bx-def-color-bg-active').addClass('bx-def-color-bg-active');
    });
</script>