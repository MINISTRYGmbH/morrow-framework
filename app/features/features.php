<?php

return array(
	'Home' => array(
		'//*[@id="canvas"]' => array(
			array('prepend' => '\\app\\features\\Time\\Simple'),
		),
		'//section' => array(
			array('append' => '\\app\\features\\Form\\Form'),
		),
	),
);