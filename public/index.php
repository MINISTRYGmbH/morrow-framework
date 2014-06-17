<?php

// $start_time = microtime(true);

// register the Composer autoloader
require '../vendor/autoload.php';

// execute Morrow framework
new Morrow\Core\Bootstrap();

// $end_time = microtime(true);
// echo 'Time: ' . ($end_time - $start_time) . '<br />';
// echo 'Memory: ' . (memory_get_usage()/1024) . ' kb<br />';
// echo 'Memory Peak: ' . (memory_get_peak_usage()/1024) . ' kb<br />';
