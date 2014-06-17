<?php

namespace app\features\Form;
use Morrow\Factory;
use Morrow\Debug;

class Form extends Factory {
	public function run() {
		$view = Factory::load('View:view-feature');

		$salutations = array('Anreden' => array('herr' => 'Herr', 'frau' => 'Frau'), 'foo' => 'bar', 'Weiteres' => array('test1' => 'Test 1', 'test2' => 'Test 2'));
		$view->setContent('salutations', $salutations);

		$this->validator->addComposition('username', array('regex' => '/[a-z0-9_-]{8,}/i'));

		$rules =  array(
			'salutation'	=> array('required', 'array' => array('in_keys' => $salutations)),
			'text'			=> array('minlength' => 5),
			'username'		=> array('required', 'composition' => 'username'),
			'file'			=> array('upload'),
			'file.tmp_name'	=> array('image' => array('jpg'), 'invalidates' => 'file'),			// the image has to be a JPG
			'file.size'		=> array('number', 'max' => 1024 * 2000, 'invalidates' => 'file'),	// no more than 2 MB
			'multi'			=> array('required', 'array' => array('in' => array('mutter', 'vater'))),
			'simplecheckbox'=> array('required', 'equal' => 'vater'),
			'date'			=> array('date' => 'd.m.Y'),
		);

		$input	= $this->input->get();
		$errors	= array();

		if (isset($input['sent'])) {
			if ($data = $this->validator->filter($input, $rules, $errors, true)) {
				Debug::dump($data);
			} else {
				Debug::dump($errors);
			}
		} else {
			// set defaults
			$input['salutation'] = 'frau';
		}

		$view->setContent('form', $this->load('Form', $input, $errors));
	}
}