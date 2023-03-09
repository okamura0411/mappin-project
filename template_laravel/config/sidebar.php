<?php

return [

  'menu' => [
		[
		'icon' => 'fa fa-sitemap',
		'title' => 'dashboard/v1',
		'url' => '/dashboard/v1',
		'route-name' => 'dashboard-v1'
	],[
		'icon' => 'fa fa-sitemap',
		'title' => 'dashboard/v2',
		'url' => '/dashboard/v2',
		'route-name' => 'dashboard-v2'
	],[
		'icon' => 'fa fa-sitemap',
		'title' => 'dashboard/v3',
		'url' => '/dashboard/v3',
		'route-name' => 'dashboard-v3'
	],[
		'icon' => 'fa fa-sitemap',
		'title' => 'subway',
		'url' => '/system',
		'route-name' => 'subway'
	],[
		'icon' => 'fa fa-image',
		'title' => 'Gallery',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => '/gallery/v1',
			'title' => 'Gallery v1',
			'route-name' => 'gallery-v1'
		]]
	]]
];
