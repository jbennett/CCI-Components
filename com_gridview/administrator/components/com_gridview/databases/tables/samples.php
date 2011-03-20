<?php
defined('KOOWA') or die;

class ComGridviewDatabaseTableSamples extends KDatabaseTableDefault {

	protected function _initialize(KConfig $config) {
		$config->append(array(
			'behaviors' => array('orderable')
		));

		parent::_initialize($config);
	}
}
