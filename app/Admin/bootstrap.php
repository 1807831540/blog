<?php

use Dcat\Admin\Admin;
use Dcat\Admin\Grid;
use Dcat\Admin\Form;
use Dcat\Admin\Grid\Filter;
use Dcat\Admin\Show;

/**
 * Dcat-admin - admin builder based on Laravel.
 * @author jqh <https://github.com/jqhph>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 *
 * extend custom field:
 * Dcat\Admin\Form::extend('php', PHPEditor::class);
 * Dcat\Admin\Grid\Column::extend('php', PHPEditor::class);
 * Dcat\Admin\Grid\Filter::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

// 覆写配置文件
config([
	// application设置
	'app.locale' => 'zh_CN',

	// admin设置
	'admin.name' => 'Admin',
	'admin.logo' => '<img src="/vendor/dcat-admin/images/logo.png" width="35">',
	'admin.menu.default_icon' => 'fa-angle-right'
]);

// 引入公共css文件
Admin::css([
	'/static/css/remixicon.css',
	'/static/css/styles.css'
]);

// 引入公共js文件
Admin::js('/static/js/common.js');