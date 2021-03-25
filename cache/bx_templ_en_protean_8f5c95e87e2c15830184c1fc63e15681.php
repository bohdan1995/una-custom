<div  id="<?php echo $a['id'];?>" class="bx-popup-wrapper bx-popup-responsive bx-popup-trans-wrapper bx-def-box-sizing <?php echo $a['wrapper_class'];?>" style="<?php echo $a['wrapper_style'];?>" role="alert">
    <!--<div class="bx-popup-box-pointer"><i class="bx-popup-border"></i></div>-->
    <div class="bx-popup bx-popup-trans bx-popup-border bx-popup-color-bg bx-def-round-corners">
        <div class="bx-popup-close-wrapper bx-def-padding bx-def-media-desktop-hide bx-def-media-tablet-hide">
            <a href="javascript:void(0);" class="bx-popup-element-close"><i class="sys-icon times"></i></a>
        </div>
        <div class="bx-popup-content" style=""><?php echo $a['content'];?></div>
        <!-- Footer is needed for Safari in iOS -->
        <div class="bx-popup-footer-wrapper bx-def-padding bx-def-media-desktop-hide bx-def-media-tablet-hide">&nbsp;</div>
    </div>
</div>