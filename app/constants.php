<?php

/** 
 * Defined constants using global
 */

global $current_page;

define('THEME_URL',                 get_template_directory_uri());
define('THEME_DIR',                 get_template_directory());
define('THEME_ASSET',               THEME_URL . '/assets');
define('THEME_CSS',                 THEME_ASSET . '/css');
define('THEME_JS',                  THEME_ASSET . '/js');
define('THEME_IMG',                 THEME_ASSET . '/images');
define('THEME_APP',                 THEME_DIR . '/app');
define('THEME_CONFIG',              THEME_APP . '/config');
define('THEME_MODEL',               THEME_APP . '/models');
define('THEME_VIEW',                THEME_APP . '/views');
define('THEME_CONTROLLER',          THEME_APP . '/controllers');
define('THEME_TEMPLATE',            THEME_DIR . '/pages');
define('THEME_BLOCK',               THEME_DIR . '/blocks');
define('THEME_PART',                THEME_DIR . '/parts');
define('THEME_PARTTERN',            THEME_DIR . '/partterns');
define('LANG_DOMAIN',               'wep');
define('SHOW_HINT',                 false);
