<?php

// $start_time = microtime(true);

// register the Composer autoloader
require './vendor/autoload.php';

// execute Morrow framework
new Morrow\Core\Frontcontroller();

// $end_time = microtime(true);
// echo 'Time: ' . round($end_time - $start_time, 2) . '<br />';
// echo 'Memory: ' . round(memory_get_usage()/1024) . ' kb<br />';
// echo 'Memory Peak: ' . round(memory_get_peak_usage()/1024) . ' kb<br />';
