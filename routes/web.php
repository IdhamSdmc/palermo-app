<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Admin\MarcaController;
use App\Http\Controllers\Admin\LineaController;
use App\Http\Controllers\Admin\BlogController;
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
Route::get('/', [MarcaController::class, 'marcas']);
//


//Rutas
Route::get('/nosotros', [LineaController::class, 'lineas']);

Route::get('/soluciones', function () {
    return view('pages.servicios2');
});

Route::get('/productos', [ProductController::class, 'productos']);

Route::get('/blog/{id}', [BlogController::class, 'blog']);
Route::get('/terminos-condiciones', function () {
    return view('pages.terminos-condiciones');
});
Route::get('/politicas-cookies', function () {
    return view('pages.politicas-cookies');
});
Route::get('/contactanos', function () {
    return view('pages.contactanos');
});
Route::post('mail', [MailController::class, 'sendMail']);
Route::post('trabajo', [MailController::class, 'trabajo']);

Route::get('/articulos', [ArticleController::class, 'mostrar'])->name('lista');

        Route::group(['prefix' => 'admin', 'namespace'=>'Admin'], function () {
        Route::get('login', 'AuthController@getSignin')->name('login');
        Route::get('signin', 'AuthController@getSignin')->name('signin');
        Route::post('signin', 'AuthController@postSignin')->name('postSignin');
        Route::post('signup', 'AuthController@postSignup')->name('admin.signup');
        Route::post('forgot-password', 'AuthController@postForgotPassword')->name('forgot-password');
        Route::get('login2', function () {
            return view('admin/login2');
        });


        # Register2
        Route::get('register2', function () {
            return view('admin/register2');
        });
        Route::post('register2', 'AuthController@postRegister2')->name('register2');

        # Forgot Password Confirmation
        Route::get('forgot-password/{userId}/{passwordResetCode}', 'AuthController@getForgotPasswordConfirm')->name('forgot-password-confirm');
        Route::post('forgot-password/{userId}/{passwordResetCode}', 'AuthController@getForgotPasswordConfirm');

        # Logout
        Route::get('logout', 'AuthController@getLogout')->name('logout');

        # Account Activation
        Route::get('activate/{userId}/{activationCode}', 'AuthController@getActivate')->name('activate');

    });
    Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'as' => 'admin.'], function ()  {

        Route::get('/','Admin\DashboardController@index') ->name('dashboard');
        Route::resource('user', 'Admin\UserController');
        Route::get('user/{id}/delete',  'Admin\UserController@confirmDestroy', )->name('user.delete')->where('id', '[0-9]+');
        Route::get('user/{id}/edit', 'Admin\UserController@edit')->name('user.edit')->where('id', '[0-9]+');
        Route::get('user/{id}/show','Admin\UserController@show')->name('user.show')->where('id', '[0-9]+');

      


    
     // menu-managment
        Route::resource('menu', 'Admin\MenuController');
        Route::get('menu/create', 'Admin\MenuController@create')->name('menu.create')->where('id', '[0-9]+');
        Route::post('menu/save', 'Admin\MenuController@save')->name('menu.save');
        Route::get('menu/{id}/delete', 'Admin\MenuController@confirmDestroy')->name('menu.delete')->where('id', '[0-9]+');
        Route::post('menu/{id}/toggle-publish','Admin\MenuController@togglePublish')->name('menu.toggle-publish')->where('id', '[0-9]+');
        Route::resource('article', 'Admin\ArticleController');

        Route::get('article/create','Admin\ArticleController@create')->name('article.create');
        Route::get('article/{id}/delete', 'Admin\ArticleController@destroy')->name('article.delete');
        Route::get('article/{id}/edit', 'Admin\ArticleController@edit')->name('article.edit');
        Route::get('article/{id}/show', 'Admin\ArticleController@show')->name('article.show');
        Route::patch('article/{id}/update',  'Admin\ArticleController@update')->name('article.update')->where('id', '[0-9]+');
        Route::get('/article', 'Admin\ArticleController@index')->name('article.index');
        Route::get('/article/{slug}', 'Admin\ArticleController@show')->name('article.show');


        Route::resource('category', 'Admin\CategoryController', array('before' => 'hasAccess:category'));
        Route::get('category/create', 'Admin\CategoryController@create')->name('category.create')->where('id', '[0-9]+');
        Route::get('category/{id}/delete', 'Admin\CategoryController@confirmDestroy')->name('category.delete')->where('id', '[0-9]+');

        Route::get('/slider', array('as' => 'admin.slider', function () {
                return View::make('backend/slider/index');
        }, ));

                                                // slider
        Route::resource('slider', 'Admin\SliderController');
        Route::get('slider/{id}/delete',  'Admin\SliderController@confirmDestroy')->name('slider.delete')->where('id', '[0-9]+');
        Route::get('slider/create',  'Admin\SliderController@create')->name('slider.create')->where('id', '[0-9]+');

        //Configuracion
        Route::resource('setting', 'Admin\SettingController');
        Route::get('/settings',  'Admin\SettingController@index')->name('setting.index')->where('id', '[0-9]+');


         //Configuracion
         Route::resource('footer', 'Admin\FooterController');
         Route::get('/footer',  'Admin\FooterController@index')->name('footer.index')->where('id', '[0-9]+');
         Route::post('/footer',  'Admin\FooterController@store')->name('footer.store')->where('id', '[0-9]+');
        //Product Routes
        Route::resource('product', 'Admin\ProductController');

        Route::get('product/create', 'Admin\ProductController@create')->name('product.create');
        Route::get('product/{id}/delete','Admin\ProductController@destroy')->name('product.delete');
        Route::get('product/{id}/edit',  'Admin\ProductController@edit')->name('product.edit');
        Route::get('product/{id}/show', 'Admin\ProductController@show')->name('product.show');
        Route::patch('product/{id}/update',  'Admin\ProductController@update')->name('product.update')->where('id', '[0-9]+');
        Route::get('/product',  'Admin\ProductController@index')->name('product.index');

        //Nuevas rutas
        //Marcas Routes
        Route::resource('marca', 'Admin\MarcaController');

        Route::get('marca/create', 'Admin\MarcaController@create')->name('marca.create');
        Route::get('marca/{id}/delete','Admin\MarcaController@destroy')->name('marca.delete');
        Route::get('marca/{id}/edit',  'Admin\MarcaController@edit')->name('marca.edit');
        Route::get('marca/{id}/show', 'Admin\MarcaController@show')->name('marca.show');
        Route::patch('marca/{id}/update',  'Admin\MarcaController@update')->name('marca.update')->where('id', '[0-9]+');
        Route::get('/marca',  'Admin\MarcaController@index')->name('marca.index');

        //Historias Routes
        Route::resource('historia', 'Admin\HistoriaController');

        Route::get('historia/create', 'Admin\HistoriaController@create')->name('historia.create');
        Route::get('historia/{id}/delete','Admin\HistoriaController@destroy')->name('historia.delete');
        Route::get('historia/{id}/edit',  'Admin\HistoriaController@edit')->name('historia.edit');
        Route::get('historia/{id}/show', 'Admin\HistoriaController@show')->name('historia.show');
        Route::patch('historia/{id}/update',  'Admin\HistoriaController@update')->name('historia.update')->where('id', '[0-9]+');
        Route::get('/historia',  'Admin\HistoriaController@index')->name('historia.index');
        //Lineas Routes
        Route::resource('linea', 'Admin\LineaController');

        Route::get('linea/create', 'Admin\LineaController@create')->name('linea.create');
        Route::get('linea/{id}/delete','Admin\LineaController@destroy')->name('linea.delete');
        Route::get('linea/{id}/edit',  'Admin\LineaController@edit')->name('linea.edit');
        Route::get('linea/{id}/show', 'Admin\LineaController@show')->name('linea.show');
        Route::patch('linea/{id}/update',  'Admin\LineaController@update')->name('linea.update')->where('id', '[0-9]+');
        Route::get('/linea',  'Admin\LineaController@index')->name('linea.index');
 
    });
