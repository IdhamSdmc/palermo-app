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
