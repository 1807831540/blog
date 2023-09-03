<?php

namespace App\Admin\Controllers;

use App\Admin\Metrics\Examples;
use App\Http\Controllers\Controller;
use Dcat\Admin\Http\Controllers\Dashboard;
use Dcat\Admin\Layout\Column;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('Dashboard')
            ->description('Deprecations...')
            ->body(function (Row $row) {
                $row->column(4, new Examples\NewUsers());
                $row->column(4, new Examples\TotalUsers());
                $row->column(4, new Examples\NewDevices());
            });
    }
}
