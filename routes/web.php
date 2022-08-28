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
return view('pages.nosotros2');
});

Route::get('/soluciones', function () {
    return view('pages.servicios2');
});

Route::get('/productos', function () {
    return view('pages.productos2');
});

Route::get('/blog', function () {
    return view('pages.blog2');
});

Route::get('/contactanos', function () {
    return view('pages.contactanos');
});
Route::get('/articulos', function () {
    return view('pages.articulo');
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
});
