<?php $mixedData=array (
  'alerts' => 
  array (
    'system' => 
    array (
      'save_setting' => 
      array (
        0 => '1',
        1 => '3',
        2 => '7',
      ),
      'installed' => 
      array (
        0 => '4',
      ),
    ),
    'sys_images_custom' => 
    array (
      'file_deleted' => 
      array (
        0 => '2',
        1 => '45',
      ),
    ),
    'sys_profiles_friends' => 
    array (
      'connection_added' => 
      array (
        0 => '5',
        1 => '7',
      ),
      'connection_removed' => 
      array (
        0 => '5',
      ),
    ),
    'sys_cmts_images' => 
    array (
      'file_deleted' => 
      array (
        0 => '6',
        1 => '43',
      ),
    ),
    'bx_timeline' => 
    array (
      'post_common' => 
      array (
        0 => '7',
      ),
    ),
    'bx_persons_pictures' => 
    array (
      'file_deleted' => 
      array (
        0 => '7',
        1 => '9',
        2 => '11',
        3 => '13',
        4 => '15',
        5 => '17',
        6 => '19',
        7 => '21',
        8 => '23',
      ),
    ),
    'bx_persons' => 
    array (
      'timeline_view' => 
      array (
        0 => '7',
      ),
      'timeline_post' => 
      array (
        0 => '7',
      ),
      'timeline_delete' => 
      array (
        0 => '7',
      ),
      'timeline_comment' => 
      array (
        0 => '7',
      ),
      'timeline_vote' => 
      array (
        0 => '7',
      ),
      'timeline_score' => 
      array (
        0 => '7',
      ),
      'timeline_report' => 
      array (
        0 => '7',
      ),
      'timeline_repost' => 
      array (
        0 => '7',
      ),
      'timeline_pin' => 
      array (
        0 => '7',
      ),
      'timeline_promote' => 
      array (
        0 => '7',
      ),
    ),
    'bx_persons_pictures_resized' => 
    array (
      'file_deleted' => 
      array (
        0 => '8',
        1 => '10',
        2 => '12',
        3 => '14',
        4 => '16',
        5 => '18',
        6 => '20',
        7 => '22',
      ),
    ),
    'sys_images_resized' => 
    array (
      'file_deleted' => 
      array (
        0 => '24',
        1 => '26',
        2 => '28',
        3 => '30',
        4 => '32',
        5 => '34',
        6 => '36',
        7 => '38',
        8 => '40',
        9 => '44',
      ),
    ),
    'sys_images' => 
    array (
      'file_deleted' => 
      array (
        0 => '25',
        1 => '27',
        2 => '29',
        3 => '31',
        4 => '33',
        5 => '35',
        6 => '37',
        7 => '39',
        8 => '41',
      ),
    ),
    'sys_cmts_images_preview' => 
    array (
      'file_deleted' => 
      array (
        0 => '42',
      ),
    ),
  ),
  'handlers' => 
  array (
    1 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:28:"alert_response_settings_save";s:6:"params";a:0:{}s:5:"class";s:25:"TemplStudioDesignServices";}',
      'name' => 'sys_studio_settings_save_design',
    ),
    2 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:45:"alert_response_sys_images_custom_file_deleted";s:6:"params";a:0:{}s:5:"class";s:27:"TemplStudioSettingsServices";}',
      'name' => 'sys_settings_sys_images_custom_file_deleted',
    ),
    3 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:3:{s:6:"module";s:6:"system";s:6:"method";s:37:"alert_response_process_storage_change";s:5:"class";s:13:"TemplServices";}',
      'name' => 'sys_settings_storage_change',
    ),
    4 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:3:{s:6:"module";s:6:"system";s:6:"method";s:32:"alert_response_process_installed";s:5:"class";s:13:"TemplServices";}',
      'name' => 'sys_installed',
    ),
    5 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:3:{s:6:"module";s:6:"system";s:6:"method";s:26:"alert_response_connections";s:5:"class";s:23:"TemplServiceConnections";}',
      'name' => 'sys_connections',
    ),
    6 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:43:"alert_response_sys_cmts_images_file_deleted";s:6:"params";a:0:{}s:5:"class";s:17:"TemplCmtsServices";}',
      'name' => 'sys_cmts_sys_cmts_images_file_deleted',
    ),
    7 => 
    array (
      'class' => 'BxPersonsAlertsResponse',
      'file' => 'modules/boonex/persons/classes/BxPersonsAlertsResponse.php',
      'service_call' => '',
      'name' => 'bx_persons',
    ),
    8 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:32:"alert_response_file_delete_local";s:6:"params";a:1:{i:0;s:15:"bx_persons_icon";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_local_file_delete_bx_persons_icon',
    ),
    9 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:31:"alert_response_file_delete_orig";s:6:"params";a:1:{i:0;s:15:"bx_persons_icon";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_orig_file_delete_bx_persons_icon',
    ),
    10 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:32:"alert_response_file_delete_local";s:6:"params";a:1:{i:0;s:16:"bx_persons_thumb";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_local_file_delete_bx_persons_thumb',
    ),
    11 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:31:"alert_response_file_delete_orig";s:6:"params";a:1:{i:0;s:16:"bx_persons_thumb";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_orig_file_delete_bx_persons_thumb',
    ),
    12 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:32:"alert_response_file_delete_local";s:6:"params";a:1:{i:0;s:17:"bx_persons_avatar";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_local_file_delete_bx_persons_avatar',
    ),
    13 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:31:"alert_response_file_delete_orig";s:6:"params";a:1:{i:0;s:17:"bx_persons_avatar";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_orig_file_delete_bx_persons_avatar',
    ),
    14 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:32:"alert_response_file_delete_local";s:6:"params";a:1:{i:0;s:21:"bx_persons_avatar_big";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_local_file_delete_bx_persons_avatar_big',
    ),
    15 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:31:"alert_response_file_delete_orig";s:6:"params";a:1:{i:0;s:21:"bx_persons_avatar_big";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_orig_file_delete_bx_persons_avatar_big',
    ),
    16 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:32:"alert_response_file_delete_local";s:6:"params";a:1:{i:0;s:18:"bx_persons_picture";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_local_file_delete_bx_persons_picture',
    ),
    17 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:31:"alert_response_file_delete_orig";s:6:"params";a:1:{i:0;s:18:"bx_persons_picture";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_orig_file_delete_bx_persons_picture',
    ),
    18 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:32:"alert_response_file_delete_local";s:6:"params";a:1:{i:0;s:16:"bx_persons_cover";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_local_file_delete_bx_persons_cover',
    ),
    19 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:31:"alert_response_file_delete_orig";s:6:"params";a:1:{i:0;s:16:"bx_persons_cover";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_orig_file_delete_bx_persons_cover',
    ),
    20 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:32:"alert_response_file_delete_local";s:6:"params";a:1:{i:0;s:22:"bx_persons_cover_thumb";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_local_file_delete_bx_persons_cover_thumb',
    ),
    21 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:31:"alert_response_file_delete_orig";s:6:"params";a:1:{i:0;s:22:"bx_persons_cover_thumb";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_orig_file_delete_bx_persons_cover_thumb',
    ),
    22 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:32:"alert_response_file_delete_local";s:6:"params";a:1:{i:0;s:18:"bx_persons_gallery";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_local_file_delete_bx_persons_gallery',
    ),
    23 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:31:"alert_response_file_delete_orig";s:6:"params";a:1:{i:0;s:18:"bx_persons_gallery";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_orig_file_delete_bx_persons_gallery',
    ),
    24 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:32:"alert_response_file_delete_local";s:6:"params";a:1:{i:0;s:16:"sys_image_resize";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_local_file_delete_sys_image_resize',
    ),
    25 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:31:"alert_response_file_delete_orig";s:6:"params";a:1:{i:0;s:16:"sys_image_resize";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_orig_file_delete_sys_image_resize',
    ),
    26 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:32:"alert_response_file_delete_local";s:6:"params";a:1:{i:0;s:14:"sys_icon_apple";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_local_file_delete_sys_icon_apple',
    ),
    27 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:31:"alert_response_file_delete_orig";s:6:"params";a:1:{i:0;s:14:"sys_icon_apple";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_orig_file_delete_sys_icon_apple',
    ),
    28 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:32:"alert_response_file_delete_local";s:6:"params";a:1:{i:0;s:17:"sys_icon_facebook";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_local_file_delete_sys_icon_facebook',
    ),
    29 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:31:"alert_response_file_delete_orig";s:6:"params";a:1:{i:0;s:17:"sys_icon_facebook";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_orig_file_delete_sys_icon_facebook',
    ),
    30 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:32:"alert_response_file_delete_local";s:6:"params";a:1:{i:0;s:16:"sys_icon_favicon";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_local_file_delete_sys_icon_favicon',
    ),
    31 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:31:"alert_response_file_delete_orig";s:6:"params";a:1:{i:0;s:16:"sys_icon_favicon";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_orig_file_delete_sys_icon_favicon',
    ),
    32 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:32:"alert_response_file_delete_local";s:6:"params";a:1:{i:0;s:9:"sys_cover";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_local_file_delete_sys_cover',
    ),
    33 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:31:"alert_response_file_delete_orig";s:6:"params";a:1:{i:0;s:9:"sys_cover";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_orig_file_delete_sys_cover',
    ),
    34 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:32:"alert_response_file_delete_local";s:6:"params";a:1:{i:0;s:22:"sys_cover_unit_profile";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_local_file_delete_sys_cover_unit_profile',
    ),
    35 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:31:"alert_response_file_delete_orig";s:6:"params";a:1:{i:0;s:22:"sys_cover_unit_profile";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_orig_file_delete_sys_cover_unit_profile',
    ),
    36 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:32:"alert_response_file_delete_local";s:6:"params";a:1:{i:0;s:17:"sys_cover_preview";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_local_file_delete_sys_cover_preview',
    ),
    37 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:31:"alert_response_file_delete_orig";s:6:"params";a:1:{i:0;s:17:"sys_cover_preview";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_orig_file_delete_sys_cover_preview',
    ),
    38 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:32:"alert_response_file_delete_local";s:6:"params";a:1:{i:0;s:24:"sys_builder_page_preview";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_local_file_delete_sys_builder_page_preview',
    ),
    39 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:31:"alert_response_file_delete_orig";s:6:"params";a:1:{i:0;s:24:"sys_builder_page_preview";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_orig_file_delete_sys_builder_page_preview',
    ),
    40 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:32:"alert_response_file_delete_local";s:6:"params";a:1:{i:0;s:22:"sys_builder_page_embed";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_local_file_delete_sys_builder_page_embed',
    ),
    41 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:31:"alert_response_file_delete_orig";s:6:"params";a:1:{i:0;s:22:"sys_builder_page_embed";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_orig_file_delete_sys_builder_page_embed',
    ),
    42 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:32:"alert_response_file_delete_local";s:6:"params";a:1:{i:0;s:23:"sys_cmts_images_preview";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_local_file_delete_sys_cmts_images_preview',
    ),
    43 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:31:"alert_response_file_delete_orig";s:6:"params";a:1:{i:0;s:23:"sys_cmts_images_preview";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_orig_file_delete_sys_cmts_images_preview',
    ),
    44 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:32:"alert_response_file_delete_local";s:6:"params";a:1:{i:0;s:17:"sys_custom_images";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_local_file_delete_sys_custom_images',
    ),
    45 => 
    array (
      'class' => '',
      'file' => '',
      'service_call' => 'a:4:{s:6:"module";s:6:"system";s:6:"method";s:31:"alert_response_file_delete_orig";s:6:"params";a:1:{i:0;s:17:"sys_custom_images";}s:5:"class";s:18:"TemplImageServices";}',
      'name' => 'sys_image_transcoder_orig_file_delete_sys_custom_images',
    ),
  ),
); ?>