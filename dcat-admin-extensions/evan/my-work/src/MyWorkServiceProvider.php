<?php

namespace Evan\MyWork;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;

class MyWorkServiceProvider extends ServiceProvider
{
	protected $js = [
        'js/index.js',
    ];
    
	protected $css = [
		'css/index.css',
	];

	protected $menu = [
        [
            'title' => 'My Work',
            'uri' => 'my-work',
            'icon' => 'ri-inbox-2-line'
        ]
    ];

	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

		//
		
	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
