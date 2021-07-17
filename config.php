<?php

define('_ROOT_FOLDER_', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('ENV_FOLDER', __DIR__ . DIRECTORY_SEPARATOR . 'env' . DIRECTORY_SEPARATOR);

//Add Composer Autoloader
require __DIR__ . '/' . 'vendor/autoload.php';

//load .env
if (file_exists(ENV_FOLDER . '/.env')) {
    $dotenv = Dotenv\Dotenv::createImmutable(ENV_FOLDER);
    $dotenv->load();
    try {
        $dotenv->required([
            'DB_NAME',
            'DB_USER',
            'DB_PREFIX',
        ])->notEmpty();
        $dotenv->required('APP_ENV')->allowedValues(['local', 'dev', 'stag', 'prod']);
        $dotenv->required('ENABLE_HTTPS')->allowedValues(['ON', 'OFF']);
        $dotenv->required('IN_MAINTENANCE')->allowedValues([true, false]);
    } catch (\Dotenv\Exception\ValidationException $error) {
        die($error->getMessage());
        //if we don't handle it, we end up with server error 500, which is extra steps to inspect server log
    }
} else {
    die('there was an error finding the .env file');
}

//load helper ENV files to prevent repeating code
if (file_exists(ENV_FOLDER . $_ENV['APP_ENV'] . '.php')) {
    require_once ENV_FOLDER . $_ENV['APP_ENV'] . '.php';
} else {
    die('there was an error finding an ENV file');
}

/** IS MAINTENANCE MODE */
define('IN_MAINTENANCE', $_ENV['IN_MAINTENANCE']);

/**
 * Set the WordPress global environment via constant WP_ENVIRONMENT_TYPE
 * Allowed values: 'local', 'development', 'staging', 'production'
 *
 * reference:
 *  - https://make.wordpress.org/core/2020/07/24/new-wp_get_environment_type-function-in-wordpress-5-5/
 *
 * This environment is fetch via the inbuilt WP function:
 *      - wp_get_environment_type()
 *
 * This function is found in: wp-includes/load.php
 */
switch ($_ENV['APP_ENV']) {
    case 'prod':
        define('WP_ENVIRONMENT_TYPE', 'production');
        break;
    case 'stag':
        define('WP_ENVIRONMENT_TYPE', 'staging');
        break;
    case 'dev':
        define('WP_ENVIRONMENT_TYPE', 'development');
        break;
    case 'local':
        define('WP_ENVIRONMENT_TYPE', 'local');
        break;
    default:
        define('WP_ENVIRONMENT_TYPE', 'production');
}

/**
 * Authentication Unique Keys and Salts.
 *
 * TODO: Change in env/.env file
 *       Generate from here https://api.wordpress.org/secret-key/1.1/salt/
 */
define('AUTH_KEY', $_ENV['AUTH_KEY']);
define('SECURE_AUTH_KEY', $_ENV['SECURE_AUTH_KEY']);
define('LOGGED_IN_KEY', $_ENV['LOGGED_IN_KEY']);
define('NONCE_KEY', $_ENV['NONCE_KEY']);
define('AUTH_SALT', $_ENV['AUTH_SALT']);
define('SECURE_AUTH_SALT', $_ENV['SECURE_AUTH_SALT']);
define('LOGGED_IN_SALT', $_ENV['LOGGED_IN_SALT']);
define('NONCE_SALT', $_ENV['NONCE_SALT']);

/**
 * Database credentials
 */
define('DB_NAME', $_ENV['DB_NAME']); //TODO: change in env/.env
define('DB_USER', $_ENV['DB_USER']); //TODO: change in env/.env
define('DB_PASSWORD', $_ENV['DB_PASSWORD']); //TODO: change in env/.env
$table_prefix = $_ENV['DB_PREFIX']; //TODO: change in env/.env

/**
 * HTTPS Status | Enable via .env file, set constant ENABLE_HTTPS
 */
$http_scheme = 'http';
if ((isset($_ENV['ENABLE_HTTPS']) && ($_ENV['ENABLE_HTTPS'] == 'ON'))) {
    $http_scheme = 'https';
    $_SERVER['HTTPS'] = 'on';
    define('FORCE_SSL_LOGIN', true);
    define('FORCE_SSL_ADMIN', true);
}
define('SITE_URL', $http_scheme . '://' . $_SERVER['HTTP_HOST']); //TODO: If this does not work for you, put it manually
define('WP_HOME', SITE_URL);
define('WP_SITEURL', SITE_URL . '/wp/');

// Change placement of wp-content
define('WP_CONTENT_DIR', dirname(__FILE__) . '/public/wp-content');
define('WP_CONTENT_URL', SITE_URL . '/wp-content');

define('FS_CHMOD_FILE', 0644);
define('FS_CHMOD_DIR', 0755);

/**
 * A convenience function to output values of Variables and/or Arrays in a more readable manner
 *
 * @param $array
 * @param bool $die
 * @param bool $print
 *
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
 * @param mixed $print
 */
function ppd($array, $print = true) //print and die
{
    pp($array, $print, true);
}

// That's all, stop editing! Happy blogging.

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}
