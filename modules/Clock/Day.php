<?php

namespace app\modules\Clock;
use Morrow\Factory;
use Morrow\Debug;

class Day extends _Default{
	public function run(){
		$this->Views_Serpent->setContent('day', $this->_current_time->format('D'));

		return $this->Views_Serpent;
	}
}
