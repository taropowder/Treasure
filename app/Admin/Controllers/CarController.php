<?php

namespace App\Admin\Controllers;

use App\Car;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class CarController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('商品详情')
            ->description('')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('修改')
            ->description('修改商品详情')
            ->body($this->form()->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('创建')
            ->description('创建一个新的车型')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Car);

        $grid->id('Id');
        $grid->name('名称')->modal('描述', function ($model) {

            return $model->particulars;
        });
//        $grid->description('Description');
//        $grid->money('Money');
        $grid->created_at('创建时间');
        $grid->updated_at('修改时间');

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
        $show = new Show(Car::findOrFail($id));

        $show->id('Id');
        $show->name('名称');
        $show->description('简述');
        $show->money('价格');
        $show->created_at('创建时间');
        $show->updated_at('修改时间');
        $show->images('车型展示图片', function ($files) {
            $files->resource('/admin/images');
            $files->disableCreateButton();
            $files->disablePagination();
            $files->disableFilter();
            $files->disableExport();
            $files->disableRowSelector();
            $files->disableActions();
            $files->picture('图片')->display(function ($picture){
                $value = config('app.url').'/storage/';
                $url = $value.$picture;
                return "<div align=\"center\"><img src='$url' /></div>";
            });
        });
        $show->accessories('配件', function ($files) {
            $files->resource('/admin/accessories');
            $files->disableCreateButton();
            $files->disablePagination();
            $files->disableFilter();
            $files->disableExport();
            $files->disableRowSelector();
            $files->disableActions();
            $files->name('配件名称');
            $files->picture('图片')->display(function ($picture){
                $value = config('app.url').'/storage/';
                $url = $value.$picture;
                return "<img src='$url' />";
            });
        });
        $show->particulars('详情')->unserialize('particulars');


        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Car);

        $form->text('name', '车名');
        $form->textarea('description', '简述');
        $form->number('money', '价格');
        $form->hasMany('images','车型展示图片', function (Form\NestedForm $form) {
            $form->file('picture','图片')->move('images');
        });
        $form->hasMany('accessories','配件', function (Form\NestedForm $form) {
            $form->text('name','配件名称');
            $form->file('picture','图片')->move('images');
        });
        $form->UEditor('particulars', '详情');

        return $form;
    }
}
