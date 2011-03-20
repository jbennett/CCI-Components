<?php
defined('_JEXEC') or die;
defined('KOOWA') or die;

error_reporting(E_ALL);
ini_set('display_errors', '1');

echo KFactory::get('admin::com.gridview.dispatcher')
	->dispatch(KRequest::get('get.view', 'cmd', 'galleries'));
