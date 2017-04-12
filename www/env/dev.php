<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
ini_set( 'log_errors','On' );
ini_set( 'error_log', dirname(__DIR__) . '/logs/wp_php_error.log' );

define( 'WP_POST_REVISIONS', false );
define( 'AUTOSAVE_INTERVAL', 300 ); //interval at 5mins
define('SAVEQUERIES', true);
define('WP_DEBUG', true); //displays WordPress errors on the screen
define('SCRIPT_DEBUG', true);
define( 'AUTOMATIC_UPDATER_DISABLED', true ); //To completely disable all automatic updates, which includes all four types

/** The name of the database for WordPress */
define('DB_NAME', 'database_name');

/** MySQL database username */
define('DB_USER', 'user');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');