<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'testwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*[ciHD@JA2>`mUSKn&apaS035:-Y[U%~wh &ujg0qSM=-Je+k2/o$1I~y{z9B[kb');
define('SECURE_AUTH_KEY',  'Ah)WB@Q8`,3{Bmj{ecV._VYo4#OK1A$|r+em?^?o3.-q=j]+R~Vzs>v=0zMgaox^');
define('LOGGED_IN_KEY',    '+1jU]X4H|nA#--F@?vNPT0?qspo`8GAOWh/27AvuC7+%F!ni@3tr`(!(gF-na)]G');
define('NONCE_KEY',        '[r@{e>ttV<._Y6G;XXPX(at${2[(2Q%(mKCk|~|>,<idY!My<*ghGtb=[uKoMPbW');
define('AUTH_SALT',        'rCWU,`4~pR[Sn ;$yB_:v}O283wDL=.o.|U8csg:{BVot*o7L85[4a>v0%`.bK(x');
define('SECURE_AUTH_SALT', '&UC7`-upD`p_X+e+,@2q|+& MN|$&NhpVn>Nv6Eszo_-y5;;law(U{Rmr1)g0i,A');
define('LOGGED_IN_SALT',   ']K>KK#xX?*%1b9|X_X>V-Fx?-E!]d!fB~-;=-7Gs.jh<2fE3p-ZT|M+^,N@3q~{B');
define('NONCE_SALT',       'OUD}Z_QQ!]L9^~$$@99LiME.D6MQn61#AbjjBG18Aq|A8y`*,`5 trgVvOlOTO73');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpshop_';

/*** START CUSTOM CHANGES ***/

// Change placement of wp-content
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/public/wp-content' );

define( 'FS_CHMOD_FILE', 0644 );
define( 'FS_CHMOD_DIR', 0755 );

//Add Composer Autoloader
require __DIR__ . '/' . 'vendor/autoload.php';

//load ENV
switch (true) {
    case strstr($_SERVER['HTTP_HOST'], ".local"):
    case strstr($_SERVER['HTTP_HOST'], ".dev"):
        define('WP_ENV', 'dev');
        define('IS_DEBUG_ENABLED', true);
//        define('SITE_DOMAIN', 'domain.local');
        break;
    default:
        define('WP_ENV', 'prods');
        define('IS_DEBUG_ENABLED', false);
//        define('SITE_DOMAIN', 'domain.com');
        break;
}
if (file_exists(__DIR__ . '/env/' . WP_ENV . '.php')) {
    require_once __DIR__ . '/env/' . WP_ENV . '.php';
} else {
    die('there was an error finding an ENV file');
}

/*
 * This is here, if needed
 * DESC: overrides the wp_options table value for home/site_url but does not change it permanently - ideal when moving across server ENV
 */
//define( 'WP_SITEURL', 'http://mywordpress.com/' );
//define( 'WP_HOME', 'http://mywordpress.com/' );

/**
 * A convenience function to output values of Variables and/or Arrays in a more readable manner
 *
 * @param $array
 * @param bool $die
 * @param bool $print
 * @return string
 */
function p($array, $print = true, $die = false)
{
    $result = '<pre>';
    $result .= print_r($array, true);
    $result .= '</pre><br/>';
    if ($print) {
        echo $result;
        if ($die) {
            die;
        }
    }
    return $result;
}

/**
 * @param $array
 */
function d($array, $print = true)
{
    p($array, $print, true);
}

/********************************************* That's all, stop editing! Happy blogging. *********************************************/

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

