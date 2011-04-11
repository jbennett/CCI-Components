<?php
defined('KOOWA') or die;

class ComGridviewDatabaseBehaviorOrderable extends KDatabaseBehaviorOrderable {

	public function _buildQueryWhere(KDatabaseQuery $query) {
		$query->where('gridview_gallery_id', '=', $this->id);

		parent::_buildQueryWhere($query);

		echo $query;
	}
}
