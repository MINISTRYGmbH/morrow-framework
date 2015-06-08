<?php

namespace app\features\_app;
use Morrow\Factory;
use Morrow\Debug;

class HelloWorld extends Factory {
	public function run(){
		Debug::dump('Feature "_app": run HelloWorld');

		return $this->Views_Serpent;
	}
}
