<div class="bx-profile-stats bx-def-border-radius-block">
    <div class="bx-profile-stats-cnt bx-def-padding">
	<div class="bx-ps-user">
            <div class="bx-ps-user-cnt">
                <div class="bx-ps-user-img">
                    <?php echo $a['profile_unit'];?>
                </div>
                <div class="bx-ps-user-info">
                    <div class="bx-ps-user-info-cnt bx-def-padding-left bx-def-box-sizing">
                        <div class="bx-ps-user-line bx-def-font-h2"><a href="<?php echo $a['profile_url'];?>" title="<?php echo $a['profile_title_attr'];?>"><?php echo $a['profile_title'];?></a></div>
                        <div class="bx-ps-user-line bx-def-margin-thd-top">
                            <div><i class="sys-icon <?php echo $a['profile_acl_icon'];?>"></i><span class="bx-def-padding-sec-left"><?php echo $a['profile_acl_title'];?></span></div>
                        </div>
                        <!--<div class="bx-def-unit-line"><a href="<?php echo $a['profile_edit_url'];?>">Edit profile</a></div>-->
                    </div>
                </div>
            </div>
	</div>
	<div class="bx-ps-menu bx-def-margin-top"><?php echo $a['menu'];?></div>
    </div>
</div>