<?php
error_reporting(0);
ini_set('display_errors', 'Off');
ini_set( 'log_errors','On' );
ini_set( 'error_log', dirname(__DIR__) . '/logs/wp_php_error.log' );

define( 'WP_POST_REVISIONS', 5 );
define('WP_DEBUG_DISPLAY', false);
define('SCRIPT_DEBUG', false);
define( 'WP_AUTO_UPDATE_CORE', 'minor' ); // Enables core updates for minor releases, e.g: when security patch is out - apply it immediately
/*
// Enables all core updates, including minor and major:
define( 'WP_AUTO_UPDATE_CORE', true );
// Disables all core updates:
define( 'WP_AUTO_UPDATE_CORE', false );
// Enables core updates for minor releases (default):
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
*/