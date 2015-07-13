<?php

$modules = [
	'=^(Demo)|(Hello/World)$=i' => [
		'pre' => [
			[
				'class'  => '\\app\\modules\\Clock\\_Pre',
				'config' => ['bla' => 'foo', 'bla2' => 'foo2'],
			],
		],

		'post' => [
			[
				'action'   => 'append',
				'class'    => '\\app\\modules\\Clock\\Time',
				'selector' => '#module-clock-time',
				'config' => ['bla' => 'foo2'],
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
