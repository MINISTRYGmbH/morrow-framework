<?php

namespace app\modules\Clock;
use Morrow\Factory;
use Morrow\Debug;

class Time extends _Default{
	public function run(){
		$this->Views_Serpent->setContent('time', $this->_current_time->format('H:i:s'));

		// get modules instance
		$modules = Factory::load('\Morrow\Core\Modules');
		// insert a custom queue item on the fly, will be executed as next module (index = 0)
		$modules->addQueueItem([
			'action'   => 'append',
			'class'    => '\\app\\modules\\Clock\\Day',
			'selector' => '#module-clock-day',
		], 0);

		return $this->Views_Serpent;
	}
}
