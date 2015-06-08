<?php

namespace app\features\some_feature;
use Morrow\Factory;
use Morrow\Debug;

class _Pre extends Factory {
	protected $Config;

	public function run() {
		Debug::dump('Feature "some_feature": run pre controller');

		return '';
	}
}
