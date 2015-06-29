<?php

namespace app\modules\Clock;
use Morrow\Factory;
use Morrow\Debug;

class Time extends _Default{
	public function run(){
		$this->Views_Serpent->setContent('time', $this->_current_time->format('H:i:s'));

		$Modules = Factory::load('\Morrow\Core\Modules');
		$Modules->runFeature([
			'action'   => 'append',
			'class'    => '\\app\\modules\\Clock\\Day',
			'selector' => '#module-clock-day',
		]);

		return $this->Views_Serpent;
	}
}
