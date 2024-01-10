<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Phone;

class PhoneController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Phone';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Phone());

        $grid->column('id', __('Id'));
        $grid->column('Name', __('Name'));
        $grid->column('Model', __('Model'));
        $grid->column('Manufacturer', __('Manufacturer'));
        $grid->column('YearRelease', __('YearRelease'));
        

        return $grid;
    }
    

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Phone::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('Name', __('Name'));
        $show->field('Model', __('Model'));
        $show->field('Manufacturer', __('Manufacturer'));
        $show->field('YearRelease', __('YearRelease'));
       

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Phone());

        $form->text('Name', __('Name'));
        $form->text('Model', __('Model'));
        $form->text('Manufacturer', __('Manufacturer'));
        $form->text('YearRelease', __('YearRelease'));

        return $form;
    }
    
}
