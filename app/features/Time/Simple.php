<?php

namespace app\features\Time;
use Morrow\Factory;
use Morrow\Debug;

class Simple extends _Default {
	public function run() {
		$time = new Models\Time;

		$this->view->setContent('time', $time->get());
	}
}