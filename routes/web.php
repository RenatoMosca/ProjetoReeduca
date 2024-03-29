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

use App\Http\Controllers\Auth\LoginController;

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
Route::get('/EAD', function () {
    return view('login');
});
Route::get('/contato', function () {
    return view('contato');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/cadastro', function () {
    return view('register');
});
Route::get('/remoney', function () {
    return view('remoney');
});
Route::get('/admin/admin-cards', function () {
    return view('admin-cards');
});
Route::get('/loja', 'LojaController@exibirTodos');
Route::get('/detalhe-produto/{id}', 'DetalheProdutoController@exibirProduto');
Route::get('/detalhe-compra/{id}', 'DetalheCompraController@exibirProduto');

Route::get('/pedido/{id}/{id_usuario}', 'PedidoController@create');

Route::post('/logar', 'Auth\LoginController@logar');




//Controllers Admin: Post do Blog

//visualização do painel admin
Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/post','PostController@exibirTodos');
Route::get('/admin/post/cadastro', 'PostController@cadastrar');
Route::post('/admin/post/cadastrar_post', 'PostController@create');
Route::get('/admin/post/remover_post/{id}', 'PostController@delete');

Route::get('/admin/post/editar_post/{id}', 'PostController@edit');
Route::post('/admin/post/editar_post/{id}', 'PostController@update');




Route::get('/blog','PostController@exibirTodosBlog');
Route::get('/blog','PostController@exibirTodosBlog');
Route::get('/detalhe-post/{id}', 'DetalhePostController@exibirPost');
Route::post('/detalhe-post/{id}', 'DetalhePostController@exibirPost');
//Controllers Admin: Comentários do Blog
//visualizar todos
Route::get('/admin/post_comentario', 'Post_comentarioController@exibirTodosComentarios');
//fornulario de envio
Route::get('/admin/comentario_teste', 'Post_comentarioController@cadastroComentario');
//enviar dados
Route::post('/admin/post_comentario', 'Post_comentarioController@create')->name('comentarioadm');
//deletar
Route::get('/admin/remove_post_comentario/{id}', 'Post_comentarioController@delete' );
//status update
Route::get('/admin/update_post_comentario/{id}', 'Post_comentarioController@update');


//controller autor
Route::get('/admin/autor', 'AutorController@exibirTodos');
Route::get('/admin/autor/cadastro', 'AutorController@cadastrar');
Route::post('/admin/autor/cadastrar_autor', 'AutorController@create');
Route::get('/admin/autor/remover_autor/{id}', 'AutorController@delete');

Route::get('/admin/autor/editar_autor/{id}', 'AutorController@edit');
Route::post('/admin/autor/editar_autor/{id}', 'AutorController@update');


//controller categoria
Route::get('/admin/categoria','CategoriaController@exibirTodos');
Route::get('/admin/categoria/cadastro', 'CategoriaController@cadastrar');
Route::post('/admin/categoria/cadastrar_categoria', 'CategoriaController@create');
Route::get('/admin/categoria/remover_categoria/{id}', 'CategoriaController@delete');

Route::get('/admin/categoria/editar_categoria/{id}', 'CategoriaController@edit');
Route::post('/admin/categoria/editar_categoria/{id}', 'CategoriaController@update');

//controller produto
Route::get('/admin/produto', 'ProdutoController@exibirTodos');
Route::get('/admin/produto/cadastro', 'ProdutoController@cadastrar');
Route::post('/admin/produto/cadastrar_produto', 'ProdutoController@create');
Route::get('/admin/produto/remover_produto/{id}', 'ProdutoController@delete');

Route::get('/admin/produto/editar_produto/{id}', 'ProdutoController@edit');
Route::post('/admin/produto/editar_produto/{id}', 'ProdutoController@update');



//-----testes

//Controllers Auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/post', 'PostController@exibirTodos');





