<?php

namespace App\Features\Time\Models;
use Morrow\Debug;
use Morrow\Factory;

class Time extends Factory {
	public function get() {
		return time();
	}
}
