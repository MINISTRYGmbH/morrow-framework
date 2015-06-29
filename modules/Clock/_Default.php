<?php

namespace app\modules\Clock;
use Morrow\Factory;
use Morrow\Debug;

class _Default extends Factory {
	protected $_current_time;

	public function __construct() {
		$this->_current_time = new \DateTime();

		return $this->Views_Serpent;
	}
}
