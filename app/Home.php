<?php

namespace app;
use Morrow\Factory;
use Morrow\Debug;

class Home extends _Default {
	public function run() {
		return $this->Views_Serpent;
	}
}