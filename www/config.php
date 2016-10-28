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

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);


/*** START CUSTOM CHANGES ***/

// Change placement of wp-content
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/public/wp-content' );

//Add Composer Autoloader
require __DIR__ . '/' . 'vendor/autoload.php';



/********************************************* That's all, stop editing! Happy blogging. *********************************************/

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');