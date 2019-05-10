<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('Dashboard')
            ->description('Description...')
//            ->row(Dashboard::title())
            ->row(function (Row $row) {

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::environment());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::extensions());
                });

                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
            });
    }

    public function info(Content $content){
        return $content
            ->header('配置信息')
            ->description('配置信息')
            ->row(function (Row $row) {

                $row->column(12, function (Column $column) {
                    $column->append(view('admin.info'));
                });

            });
    }

    public function modifyIndex(Content $content){
        return $content
            ->header('修改主页')
            ->description('修改主页内容')
            ->row(function (Row $row) {

                $row->column(12, function (Column $column) {
                    $column->append(view('admin.modify_index'));
                });

            });
    }

    public function saveIndex(Content $content){
        $file = resource_path('views/admin/index.blade.php');
        $index = fopen($file, "w");
        $index_content = request()->input('content');
        fwrite($index,$index_content);
        fclose($index);
        return redirect('/');
    }
}
