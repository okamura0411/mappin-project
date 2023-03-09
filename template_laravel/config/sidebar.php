<?php

return [

    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual Laravel view path has already been registered for you.
    |
    */
  'menu' => [[
		'icon' => 'fa fa-sitemap',
		'title' => 'Dashboard',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => '/dashboard/v1',
			'title' => 'Dashboard v1',
			'route-name' => 'dashboard-v1'
		],[
			'url' => '/dashboard/v2',
			'title' => 'Dashboard v2',
			'route-name' => 'dashboard-v2'
		],[
			'url' => '/dashboard/v3',
			'title' => 'Dashboard v3',
			'route-name' => 'dashboard-v3'
		]]
		],[
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
		'title' => 'Calendar',
		'url' => '/calendar',
		'route-name' => 'calendar'
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
	],[
		'icon' => 'fa fa-key',
		'title' => 'Login & Register',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => '/login/v3',
			'title' => 'Login v3',
			'route-name' => 'login-v3'
		],[
			'url' => '/register/v3',
			'title' => 'Register v3',
			'route-name' => 'register-v3'
		]]
	],[
		'icon' => 'fa fa-align-left',
		'title' => 'Menu Level',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => 'javascript:;',
			'title' => 'Menu 1.1',
			'sub_menu' => [[
				'url' => 'javascript:;',
				'title' => 'Menu 2.1',
				'sub_menu' => [[
					'url' => 'javascript:;',
					'title' => 'Menu 3.1',
				],[
					'url' => 'javascript:;',
					'title' => 'Menu 3.2'
				]]
			],[
				'url' => 'javascript:;',
				'title' => 'Menu 2.2'
			],[
				'url' => 'javascript:;',
				'title' => 'Menu 2.3'
			]]
		],[
			'url' => 'javascript:;',
			'title' => 'Menu 1.2'
		],[
			'url' => 'javascript:;',
			'title' => 'Menu 1.3'
		]]
	]]
];
