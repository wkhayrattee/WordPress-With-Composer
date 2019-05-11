<?php
define('_ROOT_FOLDER_', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('ENV_FOLDER',    __DIR__ . DIRECTORY_SEPARATOR . 'env' . DIRECTORY_SEPARATOR);

//Add Composer Autoloader
require __DIR__ . '/' . 'vendor/autoload.php';

//load .env
if (file_exists( ENV_FOLDER . '/.env')) {
    $dotenv = Dotenv\Dotenv::create(ENV_FOLDER);
    $dotenv->load();
    try {
        $dotenv->required(array(
            'DB_NAME',
            'DB_USER',
            'DB_PREFIX'
        ))->notEmpty();
    } catch (\Dotenv\Exception\ValidationException $error) {
        die($error->getMessage());
        //if we don't handle it, we end up with server error 500, which is extra steps to inspect server log
    }
} else {
    die('there was an error finding the .env file');
}

//load helper ENV files to prevent repeating code
switch (true) {
    case strstr($_SERVER['HTTP_HOST'], ".local"):
    case strstr($_SERVER['HTTP_HOST'], ".dev")  :
    case strstr($_SERVER['HTTP_HOST'], "pre.")  :
    case strstr($_SERVER['HTTP_HOST'], "dev.")  :
    case strstr($_SERVER['HTTP_HOST'], "test.") :
    case strstr($_SERVER['HTTP_HOST'], "dev-")  :
    case strstr($_SERVER['HTTP_HOST'], "test-") :
        define('WP_ENV', 'dev');
        define('IS_DEBUG_ENABLED', true);
        break;
    default:
        define('WP_ENV', 'prod');
        define('IS_DEBUG_ENABLED', false);
        break;
}
if (file_exists(ENV_FOLDER . WP_ENV . '.php')) {
    require_once ENV_FOLDER . WP_ENV . '.php';
} else {
    die('there was an error finding an ENV file');
}

/**
 * Authentication Unique Keys and Salts.
 *
 * TODO: Change in env/.env file
 *       Generate from here https://api.wordpress.org/secret-key/1.1/salt/
 */
define('AUTH_KEY',         $_ENV['AUTH_KEY']);
define('SECURE_AUTH_KEY',  $_ENV['SECURE_AUTH_KEY']);
define('LOGGED_IN_KEY',    $_ENV['LOGGED_IN_KEY']);
define('NONCE_KEY',        $_ENV['NONCE_KEY']);
define('AUTH_SALT',        $_ENV['AUTH_SALT']);
define('SECURE_AUTH_SALT', $_ENV['SECURE_AUTH_SALT']);
define('LOGGED_IN_SALT',   $_ENV['LOGGED_IN_SALT']);
define('NONCE_SALT',       $_ENV['NONCE_SALT']);

/**
 * Database credentials
 */
define('DB_NAME',       $_ENV['DB_NAME']); //TODO: change in env/.env
define('DB_USER',       $_ENV['DB_USER']); //TODO: change in env/.env
define('DB_PASSWORD',   $_ENV['DB_PASSWORD']); //TODO: change in env/.env
$table_prefix =         $_ENV['DB_PASSWORD']; //TODO: change in env/.env

/**
 * Whether or not we are dealing with HTTPS
 * Add default defines to handle internal URL smoothly
 */
$http_scheme = 'http';
if (isset($_SERVER['HTTP_USER_AGENT_HTTPS']) && $_SERVER['HTTP_USER_AGENT_HTTPS'] == 'ON') {
    $http_scheme        = 'https';
    $_SERVER['HTTPS']   = 'on';
    define( 'FORCE_SSL_LOGIN', true );
    define( 'FORCE_SSL_ADMIN', true );
}
define('SITE_URL',   $http_scheme . '://' . $_SERVER['HTTP_HOST']); //TODO: If this does not work for you, put it manually
define('WP_HOME',    SITE_URL);
define('WP_SITEURL', SITE_URL . '/wp/');


// Change placement of wp-content
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/public/wp-content' );
define('WP_CONTENT_URL',  SITE_URL . '/wp-content');

define( 'FS_CHMOD_FILE', 0644 );
define( 'FS_CHMOD_DIR',  0755 );

/**
 * A convenience function to output values of Variables and/or Arrays in a more readable manner
 *
 * @param $array
 * @param bool $die
 * @param bool $print
 * @return string
 */
function pp($array, $print = true, $die = false) //print or echo
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
function ppd($array, $print = true) //print and die
{
    pp($array, $print, true);
}

/********************************************* That's all, stop editing! Happy blogging. *********************************************/

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

