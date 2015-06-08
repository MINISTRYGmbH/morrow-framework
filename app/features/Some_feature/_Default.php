<?php

namespace app\features\some_feature;
use Morrow\Factory;
use Morrow\Debug;

class _Default extends Factory {
	protected $Config;

	public function __construct() {
		/**
		 * set config as member
		 */
		$this->Config = Factory::load('Config:some_feature');
		$this->Config->load(__DIR__ . '/configs/');
		Debug::dump('Feature "some_feature": run globalcontroller');
	}
}
