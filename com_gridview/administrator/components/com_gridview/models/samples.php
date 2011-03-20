<?php
defined('KOOWA') or die;

class ComGridviewModelSamples extends KModelTable {

	protected function _buildQueryJoins(KDatabaseQuery $query) {
		$query->join('LEFT', 'gridview_galleries AS g', 'tbl.gridview_gallery_id = g.gridview_gallery_id');
		parent::_buildQueryJoins($query);
	}

	protected function _buildQueryColumns(KDatabaseQuery $query) {
		$query->columns[] = 'g.title AS gallery_title';
		parent::_buildQueryColumns($query);
	}

	protected function _buildQueryOrder(KDatabaseQuery $query) {
		$query->order('g.title, ordering', 'asc');
	}
}
