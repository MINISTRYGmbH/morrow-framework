<?php

namespace app\modules\_main;
use Morrow\Factory;
use Morrow\Debug;

class _Default extends Factory {
	public function __construct(){
		return $this->Views_Serpent;
	}
}
