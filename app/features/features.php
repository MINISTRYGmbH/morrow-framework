<?php

$features = [
	'~.*~' => [
		'' => [
			/**
			 * some pre controller
			 */
			[
				'class'  => '\\app\\features\\some_feature\\_Pre',
				'config' => [],
			],

			/**
			 * start main app
			 */
			[
				'class'  => '\\app\\features\\_app\\HelloWorld',
				'config' => [],
			],
		],
	],

	'~^some_feature$~i' => [
		'' => [
			[
				'class'  => '\\app\\features\\some_feature\\_Default',
				'config' => [],
			],
		],
	],
];


foreach ($features as $regex => $feature) {
	// ... modify here
}

return $features;
