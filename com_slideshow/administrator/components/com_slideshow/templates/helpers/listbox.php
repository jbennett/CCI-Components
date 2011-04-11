<?php

class ComSlideshowTemplateHelperListbox extends ComDefaultTemplateHelperListbox {

	public function yesno($config = array()) {
		$config = new KConfig($config);
		$config->append(array(
			'name' => 'FIXME',
			'attribs' => array(),
			'deselect' => true,
		))->append(array(
			'selected' => $config->{$config->name}
		));

		$options = array();
		if ($config->deselect) {
			$options[] = $this->option(array('text'=>'- '.JText::_('Select').' -', 'value'=>''));
		}

		$options[] = $this->option(array('text'=>JText::_('Yes'), 'value'=>'1'));
		$options[] = $this->option(array('text'=>JText::_('No'), 'value'=>'0'));

		$config->options = $options;

		return $this->optionlist($config);
	}
}
