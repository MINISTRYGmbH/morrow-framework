<?php

namespace app\features\Time\models;
use Morrow\Debug;
use Morrow\Factory;

class Time extends Factory {
	public function get() {
		return time();
	}
}
