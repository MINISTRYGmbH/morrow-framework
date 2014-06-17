<?php

return array(
	'Home' => array(
		'//*[@id="canvas"]' => array(
			array('prepend' => 'Time\\Simple'),
		),
		'//section' => array(
			//array('append' => 'Form\\Form'),
			//array('before' => 'Form\\Form'),
			array('after' => 'Form\\Form'),
		),
		'//body' => array(
			array('append' => 'Time\\Javascript'),
		),
	),
);