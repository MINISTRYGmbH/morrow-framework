<?php

namespace app\modules\_main;
use Morrow\Factory;
use Morrow\Debug;

class Hello_world extends _Default {
	public function run(){

		$hour = $this->Event->trigger('Clock|get_current_time', 'h');
		foreach($this->Config->get('modules._main.activities') as $activity => $hours){
			if(in_array($hour, $hours)){
				$current_activity = $activity;
				$this->Views_Serpent->setContent('current_activity', $current_activity);
				break;
			}
		}

		return $this->Views_Serpent;
	}
}
