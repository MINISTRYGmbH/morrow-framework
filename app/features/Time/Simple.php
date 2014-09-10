<?php

namespace app\features\Time;
use Morrow\Factory;
use Morrow\Debug;

class Simple extends _Default {
	public function run($dom) {
		//$this->features->delete('Form');
		
		//$dom->prepend('strong', '<span>&#187;</span> ');
		//$dom->delete('strong span');
		//$dom->delete('a[href^="http://"]'); // Remove links
		//$dom->delete('xpath://a[text()="Test-Link"]'); // Delete test-link because of the content
		//$dom->delete('xpath://a[starts-with(text(), "Test")]'); // Delete test-link because of the content
		//$dom->delete('xpath://li[strong]'); // Delete li with strong
		
		//Debug::dump($dom->get()); // useful for save html to file

		$time	= new Models\Time;
		$format	= $this->config->get('app.features.time.format');

		$view = Factory::load('View:view-feature');
		$view->setContent('time', $time->get());
		$view->setContent('format', $format);
	}
}