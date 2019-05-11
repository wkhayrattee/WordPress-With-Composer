<?php
error_reporting(E_ALL); //TODO: or E_ALL ^ E_DEPRECATED if you are having blocks
define(_ROOT_FOLDER_, dirname(__DIR__) .  DIRECTORY_SEPARATOR);

ini_set('display_errors', 'On');
ini_set('log_errors','On');
ini_set('error_log', _ROOT_FOLDER_ . 'logs/wp_php_error.log');

define('WP_POST_REVISIONS', false);
define('AUTOSAVE_INTERVAL', 300); //interval at 5mins

define('SAVEQUERIES',       true);
define('WP_DEBUG',          true); //displays WordPress errors on the screen
define('WP_DEBUG_LOG',      true);
define('WP_DEBUG_DISPLAY',  true);
define('SCRIPT_DEBUG',      true);
define('AUTOMATIC_UPDATER_DISABLED', true); //To completely disable all automatic updates, which includes all four types
define('DISABLE_WP_CRON',            true); //TODO: put false,unless you know what you are doing + will set your wp_cron externally

/* ref: https://codex.wordpress.org/Editing_wp-config.php */
define('WP_MEMORY_LIMIT', '512M'); //TODO: use 256 if you are on small RAM
define('WP_MAX_MEMORY_LIMIT', '1024M'); //TODO: use 512 if you are on small RAM

define('DB_CHARSET',    'utf8mb4'); //TODO: change for your scenario if needed
define('DB_COLLATE',    'utf8mb4_unicode_ci'); //TODO: change for your scenario if needed
define('DB_HOST',       '127.0.0.1');

//TODO: Change site-wide parameters in www/config.php