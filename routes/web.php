<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\LaravelLocalization;


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
    return view('pages.inicio');
});


Route::get('/nosotros', function () {
return view('pages.nosotros');
});

Route::get('/servicios', function () {
    return view('pages.servicios');
});

Route::get('/productos', function () {
    return view('pages.productos');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/contactanos', function () {
    return view('pages.contactanos');
});
Route::get('/articulos', function () {
    return view('pages.articulos');
});

Route::get('/admin/login', array(
    'as' => 'admin.login',
    function () {

        return view('/admin/backend/auth/login');
    }, ));
    Route::group(array('prefix' => LaravelLocalization::getCurrentLocale()), function () {

        Route::group(array('prefix' => '/admin',
        'namespace' => 'Admin'), function () {
        Route::get('/', array('as' => 'admin.dashboard', 'uses' => 'DashboardController@index'));
        Route::resource('photo-gallery', 'PhotoGalleryController');
        Route::get('photo-gallery/{id}/delete', array('as' => 'admin.photo-gallery.delete',
                                                      'uses' => 'PhotoGalleryController@confirmDestroy', ))->where('id', '[0-9]+');
                                                       // user
        Route::resource('user', 'UserController');
        Route::get('user/{id}/delete', array('as' => 'admin.user.delete',
                                             'uses' => 'UserController@confirmDestroy', ))->where('id', '[0-9]+');

        // role
        Route::resource('role', 'RoleController');
        Route::get('role/{id}/delete', array('as' => 'admin.role.delete',
                                              'uses' => 'RoleController@confirmDestroy', ))->where('id', '[0-9]+');
// blog
Route::resource('article', 'ArticleController', array('before' => 'hasAccess:article'));
Route::get('article/{id}/delete', array('as' => 'admin.article.delete',
                                        'uses' => 'ArticleController@confirmDestroy', ))->where('id', '\d+');

// news
Route::resource('news', 'NewsController', array('before' => 'hasAccess:news'));
Route::get('news/{id}/delete', array('as' => 'admin.news.delete',
                                     'uses' => 'NewsController@confirmDestroy', ))->where('id', '[0-9]+');

// category
Route::resource('category', 'CategoryController', array('before' => 'hasAccess:category'));
Route::get('category/{id}/delete', array('as' => 'admin.category.delete',
                                         'uses' => 'CategoryController@confirmDestroy', ))->where('id', '[0-9]+');

// faq
Route::resource('faq', 'FaqController', array('before' => 'hasAccess:faq'));
Route::get('faq/{id}/delete', array('as' => 'admin.faq.delete',
                                    'uses' => 'FaqController@confirmDestroy', ))->where('id', '[0-9]+');

// project
Route::resource('project', 'ProjectController');
Route::get('project/{id}/delete', array('as' => 'admin.project.delete',
                                        'uses' => 'ProjectController@confirmDestroy', ))->where('id', '[0-9]+');

// page
Route::resource('page', 'PageController');
Route::get('page/{id}/delete', array('as' => 'admin.page.delete',
                                     'uses' => 'PageController@confirmDestroy', ))->where('id', '[0-9]+');

    });
    });
 Route::group(['namespace'=>'Admin'], function () {

        // admin auth
        Route::get('admin/logout', array('as' => 'admin.logout', 'uses' => 'AuthController@getLogout'));
        Route::get('admin/login', array('as' => 'admin.login', 'uses' => 'AuthController@getLogin'));
        Route::post('admin/login', array('as' => 'admin.login.post', 'uses' => 'AuthController@postLogin'));

        // admin password reminder
        Route::get('admin/forgot-password', array('as' => 'admin.forgot.password',
                                                  'uses' => 'AuthController@getForgotPassword', ));
        Route::post('admin/forgot-password', array('as' => 'admin.forgot.password.post',
                                                   'uses' => 'AuthController@postForgotPassword', ));

        Route::get('admin/{id}/reset/{code}', array('as' => 'admin.reset.password',
                                                    'uses' => 'AuthController@getResetPassword', ))->where('id', '[0-9]+');
        Route::post('admin/reset-password', array('as' => 'admin.reset.password.post',
                                                  'uses' => 'AuthController@postResetPassword', ));
    });
