<?php

namespace app\modules\_main;
use Morrow\Factory;
use Morrow\Debug;

class Home extends _Default {
	public function run() {
		return $this->Views_Serpent;
	}
}
