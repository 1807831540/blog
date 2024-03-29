<?php

namespace Evan\MyWork\Http\Controllers;

use Evan\MyWork\Repositories\Test;
use Evan\MyWork\MyWorkServiceProvider;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class MyWorkController extends AdminController
{
    protected function title()
    {
        return MyWorkServiceProvider::trans('work.title');
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Test(), function (Grid $grid) {
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
        return Show::make($id, new Test(), function (Show $show) {
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
        return Form::make(new Test(), function (Form $form) {
            $form->display('id');
            $form->text('key1');
            $form->text('key2');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
