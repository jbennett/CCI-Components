<?php
defined('KOOWA') or die;

class ComGridviewModelSamples extends KModelTable {

	public function __construct(KConfig $config) {
		parent::__construct($config);

		$this->_state
			->insert('gallery',		'int')
			->insert('enabled',		'int');
	}

	protected function _buildQueryJoins(KDatabaseQuery $query) {
		$query->join('LEFT', 'gridview_galleries AS g', 'tbl.gridview_gallery_id = g.gridview_gallery_id');
		parent::_buildQueryJoins($query);
	}

	protected function _buildQueryColumns(KDatabaseQuery $query) {
		$query->columns[] = 'g.title AS gallery_title';
		parent::_buildQueryColumns($query);
	}

	//protected function _buildQueryOrder(KDatabaseQuery $query) {
		//$query->order('g.title, ordering', 'asc');
	//}

	protected function _buildQueryWhere(KDatabaseQuery $query) {
		$state = $this->_state;
		// $state->enabled // TODO: add this

		if ($state->gallery)
			$query->where('tbl.gridview_gallery_id', '=', $state->gallery);

		parent::_buildQueryWhere($query);
	}
}
