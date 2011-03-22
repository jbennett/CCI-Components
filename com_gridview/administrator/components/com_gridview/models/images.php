<?php
defined('KOOWA') or die;

class ComGridviewModelImages extends KModelTable {

	public function __construct(KConfig $config) {
		parent::__construct($config);

		$this->_state
			->insert('sample',		'int')
			->insert('enabled',		'int');
	}

	protected function _buildQueryJoins(KDatabaseQuery $query) {
		$query->join('LEFT', 'gridview_samples AS s', 'tbl.gridview_sample_id = s.gridview_sample_id');
		parent::_buildQueryJoins($query);
	}

	protected function _buildQueryColumns(KDatabaseQuery $query) {
		$query->columns[] = 's.title AS sample_title';
		parent::_buildQueryColumns($query);
	}

	//protected function _buildQueryOrder(KDatabaseQuery $query) {
		//$query->order('g.title, ordering', 'asc');
	//}

	protected function _buildQueryWhere(KDatabaseQuery $query) {
		$state = $this->_state;
		// $state->enabled // TODO: add this

		if ($state->sample)
			$query->where('tbl.gridview_sample_id', '=', $state->sample);

		parent::_buildQueryWhere($query);
	}
}
