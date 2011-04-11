<?php
class ComSlideshowToolbarButtonBack extends KToolbarButtonAbstract {
	var $return_url;

	protected function _initialize(KConfig $config) {
		$config->append(array(
			'url' => ''
		));

		parent::_initialize($config);
	}

	public function getLink() {
		return $this->_options->url;
	}
}
