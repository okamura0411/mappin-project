<?php

return [

  'menu' => [
		[
		'icon' => 'fa fa-sitemap',
		'title' => '新規登録',
		'url' => '/dashboard/v1',
		'route-name' => 'dashboard-v1'
	],[
		'icon' => 'fa fa-image',
		'title' => '一覧表示',
		'url' => '/gallery/v1',
		'route-name' => 'gallery-v1'
	],[
		'icon' => 'fa fa-sitemap',
		'title' => '情報修正',
		'url' => '/dashboard/v3',
		'route-name' => 'dashboard-v3'
	],[
		'icon' => 'fa fa-sitemap',
		'title' => '緊急対応',
		'url' => '/dashboard/v2',
		'route-name' => 'dashboard-v2'
	],[
		'icon' => 'fa fa-sitemap',
		'title' => 'subway',
		'url' => '/system',
		'route-name' => 'subway'
	],[
		'icon' => 'fa fa-star',
		'title' => 'dropzone',
		'url' => '/dropzone',
		'route-name' => 'dropzone'
	],[
		'icon' => 'fa fa-key',
		'title' => 'Login & Register',
		'url' => 'javascript:;',
		'caret' => true,
		'sub_menu' => [[
			'url' => '/login/v3',
			'title' => 'Login',
			'route-name' => 'login-v3'
		],[
			'url' => '/register/v3',
			'title' => 'Register',
			'route-name' => 'register-v3'
		]]
	]]
];
