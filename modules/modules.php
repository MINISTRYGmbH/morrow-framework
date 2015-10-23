<?php

$modules = [
	'=^(Demo)|(Hello/World)$=i' => [
		'pre' => [
			[
				'class'  => '\\app\\modules\\Clock\\_Pre',
				'config' => ['foo' => 'bar'],
			],
		],
		'post' => [
			[
				'action'   => 'append',
				'class'    => '\\app\\modules\\Clock\\Time',
				'selector' => '#module-clock-time',
				'config' => ['foo' => 'bar'],
			],
		],
	],
];

/* modify here
********************************************************************************************/
foreach($modules as $regex => $module){
	// ... modify here
}

return $modules;
