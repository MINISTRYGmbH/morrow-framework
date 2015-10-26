<?php

namespace app\modules\Clock;
use Morrow\Factory;
use Morrow\Debug;

class Time extends _Default{
	public function run($dom){
		$this->Views_Serpent->setContent('time', $this->_current_time->format('H:i:s'));

		// get modules instance
		$modules = Factory::load('\Morrow\Core\Modules');
		// insert a custom queue item on the fly, will be executed as next module (index = 0)
		$modules->addModuleQueueItem([
			'action'   => 'append',
			'class'    => '\\app\\modules\\Clock\\Day',
			'selector' => '#module-clock-day',
		], 0);

		$dom->append('#module-clock-time', '<h3><i>This is a DOM manipulation performed inside the module controller.</i></h3>');

		return $this->Views_Serpent;
	}
}
