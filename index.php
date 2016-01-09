<?php
// Directory separator is set up here because separators are different on Linux and Windows operating systems
define('DS', DIRECTORY_SEPARATOR);
define('ROOT_DIR', dirname(__FILE__));
define('CONF_PATH', ROOT_DIR.'/config');
define('DEVELOPMENT_ENVIRONMENT', true);

// Import Bootstrap to load configuration and requirements
require_once ROOT_DIR.'/simplex/core/Bootstrap.php';

// Call Route class via namespace
use Core\Router;

// Define your app routes here
// Example:
// To show your example page from ExampleController with access link 'yourdomain/example' 
Router::get('example', 'Controllers\ExampleController@displayExample');


// if no route found
Router::error('Core\Error@index');

// Turn on old style routing
Router::$fallback = false;

// execute matched routes
Router::dispatch();
