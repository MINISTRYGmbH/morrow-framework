<?php

namespace app\modules\Clock;
use Morrow\Factory;
use Morrow\Debug;

class _Pre extends _Default {
	public function run() {
		$this->Event->on('Clock|get_current_time', function($event, $format){
			if(!isset($format)){
				$format = $this->Config->get('modules.Clock.default_format');
			}

			return $this->_current_time->format($format);
		});
	}
}
