<?php

/**
 * This setting is showing HTML Editor that holding the content of our block.
 */
$settings->add(new admin_setting_confightmleditor( // Using admin_setting_confightmleditor to show HTML Editor
    'block_zad_livebroadcast/content', // block code name / config name (key)
    new lang_string('schedule_content', 'block_zad_livebroadcast'), // Value of config title
    new lang_string('empty', 'block_zad_livebroadcast'), // Value ifof config title description
    new lang_string('default_content', 'block_zad_livebroadcast'), // The default value of config
    PARAM_RAW // Data type
));
