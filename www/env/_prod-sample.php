<?php
error_reporting(0);
ini_set('display_errors',   'Off');
ini_set('log_errors',      'On');
ini_set('error_log', _ROOT_FOLDER_ . 'logs/wp_php_error.log');

define('WP_POST_REVISIONS', 2);
define('AUTOSAVE_INTERVAL', 300); //interval at 5mins

define('WP_DEBUG',          false); //dont't display WordPress errors on the screen
define('WP_DEBUG_LOG',      false);
define('WP_DEBUG_DISPLAY',  false);
define('SCRIPT_DEBUG',      false);
define('SAVEQUERIES',       false);
define('DISABLE_WP_CRON',   true); //TODO: put false,unless you know what you are doing + will set your wp_cron externally

define('WP_AUTO_UPDATE_CORE', 'minor'); // Enables core updates for minor releases, e.g: when security patch is out - apply it immediately
/*
// Enables all core updates, including minor and major:
define( 'WP_AUTO_UPDATE_CORE', true );
// Disables all core updates:
define( 'WP_AUTO_UPDATE_CORE', false );
// Enables core updates for minor releases (default):
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
*/

/* ref: https://codex.wordpress.org/Editing_wp-config.php */
define('WP_MEMORY_LIMIT', '512M'); //TODO: use 256 if you are on small RAM
define('WP_MAX_MEMORY_LIMIT', '1024M'); //TODO: use 512 if you are on small RAM

define('DB_CHARSET',    'utf8mb4'); //TODO: change for your scenario if needed
define('DB_COLLATE',    'utf8mb4_unicode_ci'); //TODO: change for your scenario if needed
define('DB_HOST',       '127.0.0.1');

//TODO: Change site-wide parameters in www/config.php