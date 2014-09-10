<?php

return array(
	'~^home$~i' => array(
		'#canvas' => array(
			array('prepend' => '\\app\\features\\Time\\Simple'),
		),
		'section' => array(
			//array('append' => '\\app\\features\\Form\\Form'),
			//array('before' => '\\app\\features\\Form\\Form'),
			//array('after' => '\\app\\features\\Form\\Form'),
		),
		'body' => array(
			//array('append' => '\\app\\features\\Time\\Javascript'),
		),
	),
);