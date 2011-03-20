<?php
defined('KOOWA') or die;

class ComGridviewViewHtml extends ComDefaultViewHtml {

	public function __construct(KConfig $config) {
		$config->views = array(
			'galleries'	=> JText::_('Galleries'),
			'samples'	=> JText::_('Samples'),
			'images'	=> JText::_('Images')
		);

		parent::__construct($config);
	}
}
?>
