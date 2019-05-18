<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
//    $router->get('/info','HomeController@info');
//    $router->get('/pages_manage/{page}','PageController@newPage')->name('page_manage');
//    $router->post('/pages_manage/{page}','PageController@newPage')->name('save_manage');
    $router->get('/modify_index','HomeController@modifyIndex');
    $router->post('/modify_index','HomeController@saveIndex');
    $router->resource('users', UserController::class);
    $router->resource('homepictures', HomePictureController::class);
    $router->resource('cars', CarController::class);
    $router->resource('pages', PageController::class);
    $router->resource('announcements', AnnouncementController::class);
    $router->resource('classifications', ClassificationController::class);
    $router->resource('footers', FooterController::class);
    $router->resource('gallery', GalleryController::class);

});
