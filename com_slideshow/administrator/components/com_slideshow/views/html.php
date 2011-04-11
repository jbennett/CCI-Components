<?php

class ComSlideshowViewHtml extends ComDefaultViewHtml {

	public function display() {
		$name = $this->getName();

		if ($name != 'dashboard' && KInflector::isPlural($name) && KRequest::type() != 'AJAX') {
		//	KFactory::get('admin::com.slideshow.toolbar.'.$name)
		//		->append('divider')
		//		->append('enable')
		//		->append('disable');
		}

		return parent::display();
	}
}
