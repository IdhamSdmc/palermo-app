<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArticleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('pages.inicio2');
});

Route::get('/nosotros', function () {
return view('pages.nosotros2');
});

Route::get('/soluciones', function () {
    return view('pages.servicios2');
});

Route::get('/productos', function () {
    return view('pages.productos2');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/contactanos', function () {
    return view('pages.contactanos');
});

Route::get('/articulos', [ArticleController::class, 'mostrar']);

Route::get('/admin/login', array(
    'as' => 'admin.login',
    function () {

        return view('/admin/backend/auth/login');
    }, ));
    Route::get('/photo-gallery/{slug}', array('as' => 'dashboard.photo_gallery.show',
    'uses' => 'PhotoGalleryController@show', ));
    Route::group(['prefix' => 'admin', 'namespace'=>'Admin'], function () {
    Route::get('login', 'AuthController@getLogin')->name('login');
    Route::get('signin', 'AuthController@getSignin')->name('signin');
    Route::get('logout', array('as' => 'admin.logout', 'uses' => 'AuthController@getLogout'));
    Route::post('signin', array('as' => 'admin.login.post', 'uses' => 'AuthController@postLogin'));

    Route::post('forgot-password', 'AuthController@postForgotPassword')->name('forgot-password');

    });
    Route::group(array('prefix' => '/admin',
    'namespace' => 'Admin',
    'middleware' => ['before', 'sentinel.auth', 'sentinel.permission'] ), function ()  {
        Route::get('/', array('as' => 'admin.dashboard', 'uses' => 'DashboardController@index'));
        Route::resource('user', 'UserController');

        Route::get('user/{id}/delete', array('as' => 'admin.user.delete',
                                             'uses' => 'UserController@confirmDestroy', ))->where('id', '[0-9]+');
        Route::get('user/{id}/edit', array('as' => 'admin.user.edit',
                                             'uses' => 'UserController@edit', ))->where('id', '[0-9]+');
                                             Route::get('user/{id}/show', array('as' => 'admin.user.show',
                                             'uses' => 'UserController@show', ))->where('id', '[0-9]+');

                                             Route::resource('role', 'RoleController');
                                             Route::get('role/{id}/delete', array('as' => 'admin.role.delete',
                                                                                   'uses' => 'RoleController@confirmDestroy', ))->where('id', '[0-9]+');
                                              Route::get('role/create', array('as' => 'admin.role.create',
                                                                                   'uses' => 'RoleController@create', ))->where('id', '[0-9]+');
                                        Route::get('role/{id}/edit', array('as' => 'admin.role.edit',
                                                                                   'uses' => 'RoleController@edit', ))->where('id', '[0-9]+');
                                         Route::get('/role', array('as' => 'admin.role.index', 'uses' => 'RoleController@index'));

                                         Route::get('role/{id}/show', array('as' => 'admin.role.show',
                                                                                   'uses' => 'RoleController@show', ))->where('id', '[0-9]+');

                                                                                   Route::patch('role/{id}/update', array('as' => 'admin.role.update',
                                                                                   'uses' => 'RoleController@update', ))->where('id', '[0-9]+');

                                                                                   Route::resource('photo-gallery', 'PhotoGalleryController');
        Route::get('photo-gallery/create', array('as' => 'admin.photo-gallery.create',
        'uses' => 'PhotoGalleryController@create', ))->where('id', '[0-9]+');
        Route::get('photo-gallery/{id}/delete', array('as' => 'admin.photo-gallery.delete',
                                                      'uses' => 'PhotoGalleryController@confirmDestroy', ))->where('id', '[0-9]+');
        Route::get('photo-gallery/{id}/edit', array('as' => 'admin.photo-gallery.edit',
                                                      'uses' => 'PhotoGalleryController@edit', ))->where('id', '[0-9]+');
        Route::get('photo-gallery/{id}/show', array('as' => 'admin.photo-gallery.show',
                                                      'uses' => 'PhotoGalleryController@show', ))->where('id', '[0-9]+');
    Route::patch('photo-gallery/{id}/update', array('as' => 'admin.photo-gallery.update',
                                                      'uses' => 'PhotoGalleryController@update', ))->where('id', '[0-9]+');
     // menu-managment
     Route::resource('menu', 'MenuController');
     Route::get('menu/create', array('as' => 'admin.menu.create',
     'uses' => 'MenuController@create', ))->where('id', '[0-9]+');
     Route::post('menu/save', array('as' => 'admin.menu.save', 'uses' => 'MenuController@save'));
     Route::get('menu/{id}/delete', array('as'   => 'admin.menu.delete',
                                          'uses' => 'MenuController@confirmDestroy'))->where('id', '[0-9]+');
     Route::post('menu/{id}/toggle-publish', array('as'   => 'admin.menu.toggle-publish',
                                                   'uses' => 'MenuController@togglePublish'))->where('id', '[0-9]+');
     Route::resource('article', 'ArticleController');

     Route::get('article/create', array('as' => 'admin.article.create',
     'uses' => 'ArticleController@create', ));
     Route::get('/article', array('as' => 'dashboard.article', 'uses' => 'ArticleController@index'));
     Route::get('/article/{slug}', array('as' => 'dashboard.article.show', 'uses' => 'ArticleController@show'));
    Route::resource('category', 'CategoryController', array('before' => 'hasAccess:category'));
    Route::get('category/create', array('as' => 'admin.category.create',
                                                 'uses' => 'CategoryController@create', ))->where('id', '[0-9]+');
        Route::get('category/{id}/delete', array('as' => 'admin.category.delete',
                                                 'uses' => 'CategoryController@confirmDestroy', ))->where('id', '[0-9]+');


                                                 Route::get('/slider', array(
                                                    'as' => 'admin.slider',
                                                    function () {

                                                        return View::make('backend/slider/index');
                                                    }, ));

                                                // slider
                                                Route::resource('slider', 'SliderController');
                                                Route::get('slider/{id}/delete', array('as' => 'admin.slider.delete',
                                                                                       'uses' => 'SliderController@confirmDestroy', ))->where('id', '[0-9]+');
                                                                                       Route::get('slider/create', array('as' => 'admin.slider.create',
                                                                                       'uses' => 'SliderController@create', ))->where('id', '[0-9]+');
                                                    });
