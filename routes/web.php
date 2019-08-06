<?php

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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/loja', function () {
    return view('loja');
});
Route::get('/EAD', function () {
    return view('login');
});
Route::get('/contato', function () {
    return view('contato');
});
Route::get('/login', function () {
    return view('login');
});

//-----testes
Route::get('/h', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
