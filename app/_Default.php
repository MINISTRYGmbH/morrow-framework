<?php

namespace app;
use Morrow\Factory;
use Morrow\Debug;

class _Default extends Factory {
	public function __construct() {
		$this->view = Factory::load('Views\Serpent');
	}
}
