<?php

class ComSlideshowViewOptionsHtml extends ComSlideshowViewHtml {

	public function display() {
		$back = KFactory::tmp('admin::com.slideshow.toolbar.button.back', array(
			'url' => 'index.php?option=com_slideshow&view=slideshows'
		));
		KFactory::get('admin::com.slideshow.toolbar.options')
			->prepend('divider')
			->prepend($back);

		return parent::display();
	}
}
