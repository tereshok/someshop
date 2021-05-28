<?php
define('THEME_DIR', get_template_directory());
define('THEME_DIR_URI', get_template_directory_uri());

require_once THEME_DIR .'/inc/helpers/file.php';
require_once THEME_DIR .'/inc/wp/enqueue_scripts.php';
require_once THEME_DIR .'/inc/wp/after_setup_theme.php';
require_once THEME_DIR .'/inc/wp/widget_init.php';
require_once THEME_DIR .'/inc/acf/acf_options_init.php';
require_once THEME_DIR .'/inc/acf/acf_map_init.php';
require_once THEME_DIR .'/inc/ajax/ajax-fbi.php';

