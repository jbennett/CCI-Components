<?php

class ComSimpleshowDatabaseTableImages extends KDatabaseTableDefault {
	
	public function _initialize(KConfig $config) {
		$config->behaviors = array('orderable');
		parent::_initialize($config);
	}
	
}