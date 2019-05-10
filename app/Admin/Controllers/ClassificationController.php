<?php

namespace App\Admin\Controllers;

use App\Car;
use App\Classification;
use App\Http\Controllers\Controller;
use App\Image;
use App\RootLink;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class ClassificationController extends Controller
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
            ->header('Detail')
            ->description('description')
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
            ->header('Edit')
            ->description('description')
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
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Classification);

        $grid->id('Id');
        $grid->name('Name');
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');

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
        $show = new Show(Classification::findOrFail($id));

        $show->id('Id');
        $show->name('分类名称');
        $show->created_at('Created at');
        $show->updated_at('Updated at');
        $show->cars('车型', function ($classification_car) {
            $classification_car->resource('/admin/classification_car');
            $classification_car->disableCreateButton();
            $classification_car->disablePagination();
            $classification_car->disableFilter();
            $classification_car->disableExport();
            $classification_car->disableRowSelector();
            $classification_car->disableActions();
            $classification_car->car()->name('车型名称');
            $classification_car->id('图片')->display(function ($id){
                $images = Image::where('car_id',$id)->get();
                $picures = [];

                foreach ($images as $image){
                    $picures[] = $image['picture'];
                }
                return $picures;
            })->gallery(['width' => 60, 'height' => 60, 'zooming' => true]);
        });
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Classification);

        $form->text('name', '分类名称');
        $form->hasMany('cars','分类车型', function (Form\NestedForm $form) {
            $form->select('car_id','车型')->options(Car::all()->pluck('name', 'id'));
        });
        return $form;
    }
}
