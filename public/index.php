<?php
/**
 * Namespaces
 */
use \Kima\Application;

// Define path to app directory
if (!defined('ROOT_FOLDER')) {
    define('ROOT_FOLDER', realpath(dirname(__FILE__) . '/..'));
}

// loading composer autoload
require_once ROOT_FOLDER . '/vendor/autoload.php';

$application = Application::get_instance()->run([
    '/' => 'Index',
    '/([A-Za-z0-9]+)' => 'Index'
]);
