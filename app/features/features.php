<?php

$features = [
	'~^(home)?$~i' => [
		'#canvas' => [
			['action' => 'prepend', 'class' => '\\app\\features\\Time\\Simple', 'config' => ['format' => 123]]
		],
		'section' => [
			//['action' => 'append', 'class' => '\\app\\features\\Form\\Form'],
		],
	],
];


foreach ($features as $regex => $feature) {
	// ... modify here
}

return $features;