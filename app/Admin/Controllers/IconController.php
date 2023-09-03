<?php

namespace App\Admin\Controllers;

use Dcat\Admin\Admin;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Widgets\Tab;
use Dcat\Admin\Http\Controllers\AdminController;

class IconController extends AdminController
{
    public function index(Content $content)
    {
        return $content
            ->header('Icon')
            ->description('Deprecations...')
            ->body(function (Row $row) {
                $tab = Tab::make()
                    ->withCard()
                    ->padding('20px')
                    ->add(('Feather'), view('admin::helpers.feather'))
                    ->add(('Font Awesome'), view('admin::helpers.font-awesome'))
                    ->add(('Remix Icon'), view('admin::helpers.remixicon'));

                $row->column(12, $tab);
            });
    }
}