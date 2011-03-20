<?php
defined('KOOWA') or die;

class ComGridviewTemplateHelperListbox extends ComDefaultTemplateHelperListbox {

	public function galleries($config = array()) {
		$config = new KConfig($config);
		$config->append(array(
			'model' => 'galleries',
			'name'	=> 'gridview_gallery_id',
			'value'	=> 'id',
			'text'	=> 'title'
		));

		return parent::_listbox($config);
	}
}
?>
