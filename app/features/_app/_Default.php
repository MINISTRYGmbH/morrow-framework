<?php

namespace app\features\_app;
use Morrow\Factory;
use Morrow\Debug;

class _Default extends Factory {
	public function __construct(){
		Debug::dump('Feature "_app": run globalcontroller');

		return $this->Views_Serpent;
	}
}
