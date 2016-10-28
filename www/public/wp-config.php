<?php
/*
 * We are taking the advantage of wordpress allowing us to have wp-config.php one folder below the wordpress folder.
 * Now we can do anything we want, e.g: linking to our custom config files and also adding composer autoloader
 *
 * REF: https://codex.wordpress.org/Hardening_WordPress (see section: Securing wp-config.php)
 */

/** Location of your WordPress configuration. */
require_once(dirname(__DIR__) . '/' . 'config.php');
