<?php

class ModSimpleshowHtml extends ModDefaultHtml {
	
	public function display() {
		
		$images = KFactory::tmp('admin::com.simpleshow.model.image')
			->limit(4)
			->getList();
			
		$this->assign('images', $images);
		parent::display();
	}
}