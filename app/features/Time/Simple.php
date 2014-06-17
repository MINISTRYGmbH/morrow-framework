<?php

namespace app\features\Time;
use Morrow\Factory;
use Morrow\Debug;

class Simple extends _Default {
	public function run() {
		$time	= new Models\Time;
		$format	= $this->config->get('app.features.time.format');

		$view = Factory::load('View:view-feature');
		$view->setContent('time', $time->get());
		$view->setContent('format', $format);
	}
}