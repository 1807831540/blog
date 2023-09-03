<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Demo;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class DemoController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Demo(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('key1');
            $grid->column('key2');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
        
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new Demo(), function (Show $show) {
            $show->field('id');
            $show->field('key1');
            $show->field('key2');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Demo(), function (Form $form) {
            $form->display('id');
            $form->text('key1');
            $form->text('key2');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
