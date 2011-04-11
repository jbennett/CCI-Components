<?php

class ComSlideshowModelOptions extends KModelTable {

	public function __construct(KConfig $config) {
		parent::__construct($config);

		$this->_state
			->insert('slideshow', 'int');
	}

	protected function _buildQueryWhere(KDatabaseQuery $query) {

		$state = $this->_state;

		if (is_numeric($state->slideshow)) {
			$query->where('tbl.slideshow_slideshow_id', '=', $state->slideshow);
		}

		parent::_buildQueryWhere($query);
	}
}
