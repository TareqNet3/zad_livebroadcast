<?php

$settings->add(new admin_setting_confightmleditor(
    'zad_livebroadcast/content',
    new lang_string('schedule_content', 'block_zad_livebroadcast'),
    new lang_string('empty', 'block_zad_livebroadcast'),
    new lang_string('default_content', 'block_zad_livebroadcast'),
    PARAM_RAW
));
