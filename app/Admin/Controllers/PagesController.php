<?php


namespace App\Admin\Controllers;


use App\Http\Controllers\Controller;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class PagesController extends Controller
{
    public function newPage(Content $content){
        return $content
            ->header('新建页面')
            ->description('新建一个页面')
            ->row(function (Row $row) {

                $row->column(12, function (Column $column) {
                    $column->append(view('admin.pages')->with(['page'=>request()->route('page')]));
                });

            });
    }
}