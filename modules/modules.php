<?php

$modules = [
	'=^(Demo)|(Hello/World)$=i' => [
		'pre' => [
			[
				'class'  => '\\app\\modules\\Clock\\_Pre',
			],
		],

		'post' => [
			[
				'action'   => 'append',
				'class'    => '\\app\\modules\\Clock\\Time',
				'selector' => '#module-clock-time',
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
