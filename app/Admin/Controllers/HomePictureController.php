<?php

namespace App\Admin\Controllers;

use App\Car;
use App\HomePicture;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class HomePictureController extends Controller
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
            ->header('首页大图')
            ->description('首页轮播大图列表')
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
            ->header('首页大图')
            ->description('详情')
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
            ->description('修改大图信息')
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
        $grid = new Grid(new HomePicture);

        $grid->id('Id');
        $grid->picture('图片')->display(function ($picture){
            $value = config('app.url').'/storage/';
            $url = $value.$picture;
            return "<div align=\"center\"><img src='$url' width='100px'/></div>";
        })->modal('描述', function ($model) {

            return $model->description;
        });
//        $grid->description('Description');
//        $grid->car_id('Car id');
//        $grid->description('描述')
        $grid->car()->name('相关车型');
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
        $show = new Show(HomePicture::findOrFail($id));

        $show->id('Id');
        $show->picture('图片')->image();;
        $show->car()->name('相关车型')->as(function ($car){
            return $car['name'];
        });
        $show->description('详情')->unserialize('Description');
        $show->created_at('创建时间');
        $show->updated_at('修改时间');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new HomePicture);

        $form->image('picture', '图片');
        $form->UEditor('description', '简述');
        $form->select('car_id','相关车型')->options(Car::all()->pluck('name', 'id'));

        return $form;
    }
}
