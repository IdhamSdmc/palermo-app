<?php

use Illuminate\Support\Facades\Route;
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
        
        Route::resource('photo-gallery', 'PhotoGalleryController');
        Route::get('photo-gallery/create', array('as' => 'admin.photo-gallery.create',
        'uses' => 'PhotoGalleryController@create', ))->where('id', '[0-9]+');
        Route::get('photo-gallery/{id}/delete', array('as' => 'admin.photo-gallery.delete',
                                                      'uses' => 'PhotoGalleryController@confirmDestroy', ))->where('id', '[0-9]+');
                                                      Route::get('photo-gallery/{id}/edit', array('as' => 'admin.photo-gallery.edit',
                                                      'uses' => 'PhotoGalleryController@edit', ))->where('id', '[0-9]+');
                                                      Route::get('photo-gallery/{id}/show', array('as' => 'admin.photo-gallery.show',
                                                      'uses' => 'PhotoGalleryController@show', ))->where('id', '[0-9]+');
   
   
                                                    });
