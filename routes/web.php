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
//rotas de visualização
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


//Controllers Admin: Post do Blog

//visualização do painel admin
Route::get('/admin', function () {
    return view('admin.index');
});

//visualização dos posts no painel admin
Route::get('/admin/post', 'PostController@exibirTodos');

//visualização do formulário
Route::get('/admin/post/cadastrar','PostController@cadastrar');
//Porque não tem a visualização dessa rota? Ela é necessária?
Route::post('/admin/post/create','PostController@create');

Route::get('/admin/post/edit/{id}','PostController@edit');

//Controllers Admin: Comentários do Blog

//controller autor
Route::get('/admin/autor', 'AutorController@exibirTodos');
Route::get('/admin/autor/cadastro', 'AutorController@cadastrar');
Route::post('/admin/autor/cadastrar_autor', 'AutorController@create');
Route::get('/admin/autor/remover_autor/{id}', 'AutorController@delete');

Route::get('/admin/autor/editar_autor/{id}', 'AutorController@edit');
Route::post('/admin/autor/editar_autor/{id}', 'AutorController@update');



//-----testes

//Controllers Auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/post', 'PostController@exibirTodos');





