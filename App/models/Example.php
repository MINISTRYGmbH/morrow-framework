<?php

namespace app\models;
use Morrow\Debug;
use Morrow\Factory;

class Example extends Factory {
	public function __construct() {
		Debug::dump('Model "Example" found.');
	}
}
