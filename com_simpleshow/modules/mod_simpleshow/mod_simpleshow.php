<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

KFactory::tmp('site::mod.simpleshow.html', array(
	'params'  => $params,
	'module'  => $module,
	'attribs' => $attribs
))->display();