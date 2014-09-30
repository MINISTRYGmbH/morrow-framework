<?php

$features = [
	'~^(home)?$~i' => [
		'section' => [
			//['action' => 'append', 'class' => '\\app\\features\\Form\\Form'],
		],
	],
];


foreach ($features as $regex => $feature) {
	// ... modify here
}

return $features;