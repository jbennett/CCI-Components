<?php
defined('KOOWA') or die;

class ComGridviewDatabaseTableImages extends KDatabaseTableDefault {

	protected function _initialize(KConfig $config) {
		$uploadable = KFactory::get('admin::com.gridview.database.behavior.uploadable', array(
			'thumbs'	=> array(
				array('width' => 100, 'height' => 200, 'prefix' => 'small_', 'suffix' => '', 'greyscale' => false),
				array('width' => 100, 'height' => 200, 'prefix' => 'small_', 'suffix' => '_grey', 'greyscale' => true),
				array('width' => 565, 'height' => 363, 'prefix' => 'large_', 'suffix' => '', 'greyscale' => false),
				array('width' => 565, 'height' => 363, 'prefix' => 'large_', 'suffix' => '_grey', 'greyscale' => true),
			),
			'location'	=> 'media/com_gridview/uploads/'
		));

		$config->append(array(
			'behaviors' => array($uploadable)
		));

		parent::_initialize($config);
	}
}
