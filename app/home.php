<?php

namespace App;
use Morrow\Factory;
use Morrow\Debug;

class PageController extends DefaultController {
	public function run() {
		$this->_testValidator();
		//$this->_testStreams();
		//$this->_testMessageQueue();
	}

	protected function _testValidator() {
		$salutations = array('Anreden' => array('herr' => 'Herr', 'frau' => 'Frau'), 'foo' => 'bar', 'Weiteres' => array('test1' => 'Test 1', 'test2' => 'Test 2'));
		$this->view->setContent('salutations', $salutations);

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

		$this->view->setContent('form', $this->load('Form', $input, $errors));


		// $input = $this->validator->filter($input, $rules);
		// Debug::dump($input);	

	}

	protected function _testStreams() {
		// You have to do this before working with the session
		$this->prepare('Db', $this->config->get('db'));
		
		Factory::load('Streams\Db:streamdb_sessions', 'dbs', $this->db, 'sessions');
		//unlink('db://images/test.jpg');
		//$this->session->set('debug', 'test');
		echo $this->session->get('debug');
		//print_r(scandir('sessions://'));

		Factory::load('Streams\File:streamfile_public', 'public', PUBLIC_PATH);

		#file_put_contents('public://test.jpg', 'ulfggdfgfdgdfgdf2');
		#unlink('public://test.jpg');



		
		//Factory::load('Streams\Db:streamdb_files', 'db', $this->db, 'files');
		//file_put_contents('db://images/test.jpg', 'ulfggdfgfdgdfgdf2');
		//file_get_contents('db://images/test.jpg');
		//unlink('db://images/test.jpg');
		//file_put_contents('db://images/test2.jpg', '123');

		//$bla = fopen('db://images/test.jpg', 'w');
		//$bla = fopen('sessions://images/test2.jpg', 'w');

		// var_dump(filetype('db://images/test.jpg'));
		// var_dump(file_exists('db://images/test.jpg'));
		// var_dump(is_readable('db://images/test.jpg'));
		// var_dump(is_writable('db://images/test.jpg'));
		// var_dump(is_executable('db://images/test.jpg'));
		// var_dump(filemtime('db://images/test.jpg'));
		// var_dump(touch('db://images/test.jpg'));

		//print_r( file_get_contents('db://images/test.jpg') );
	}

	protected function _testMessageQueue() {
		$this->messagequeue->set('mq/foobar', array('data' => '1'));
		$this->messagequeue->set('mq/foobar', array('data' => '2'));
		$this->messagequeue->set('mq/foobar', array('data' => array('foo' => 'bar')));
	}
}