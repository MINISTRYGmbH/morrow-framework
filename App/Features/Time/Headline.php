<?php

namespace App\Features\Dummy;
use Morrow\Factory;
use Morrow\Debug;

class Headline extends _Default {
	public function run() {
		$this->view->setContent('time', time());
	}
}