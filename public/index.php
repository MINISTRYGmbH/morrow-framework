<?php

namespace Morrow;

// define paths
define('PUBLIC_PATH', realpath(__DIR__) . '/');
define('PUBLIC_STORAGE_PATH', realpath(__DIR__ . '/storage') . '/');
define('APP_PATH', realpath(__DIR__ . '/../app') . '/');
define('STORAGE_PATH', realpath(__DIR__ . '/../app/storage') . '/');

// define the path to vendor dir
// change this if you have to projects which should use the same vendor folder
define('VENDOR_PATH', realpath(__DIR__ . '/../vendor') . '/');

// register the Composer autoloader
require VENDOR_PATH . 'autoload.php';

// execute Morrow framework
new Core\Frontcontroller();
