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

Auth::routes();


Route::get('/', 'HomeController@index');

Route::get('/index', function () {
    return view('/index'); 
});

Route::get('/home', function () {
    return view('home'); 
});

Route::get('/relatorio', function () {
    return view('relatorio.relatorio'); 
});

Route::get('/relatorio/relatorio_print', function () {
    return view('relatorio.relatorio_print'); 
});

Route::get('/logout', function () {
    return view('auth.login'); 
});


Route::get('/clientes/listar', 'ClienteController@lista');

Route::get('/clientes/contacts', 'ClienteController@contacts');

//Route::get('/trabalhadors/profile', 'TrabalhadorController@profile');

Route::get('/trabalhadors/listar', 'TrabalhadorController@lista');

Route::get('/projectos/lista', 'ProjectoController@lista');

Route::get('/projectos/detalhes', 'ProjectoController@detalhes');

Route::get('/projectos/falhas', 'ProjectoController@falhas');

Route::get('/projectos/fases', 'FaseController@fases');

Route::get('/projectos/alocacao', 'AlocacaoController@alocacao');

Route::get('/projectos/evolucao', 'EvolucaoController@evolucao');

Route::get('/produtos/listar', 'ProdutoController@lista');

Route::get('/produtos/detalhes', 'ProdutoController@detalhes');

Route::get('/produtos/grid', 'ProdutoController@grid');



Route::resource('users', 'UserController');

Route::resource('clientes', 'ClienteController');

Route::resource('infraestruturas', 'InfraestruturaController');

Route::resource('trabalhadors', 'TrabalhadorController');

Route::resource('items', 'ItemController');

Route::resource('categorias', 'CategoriaController');

Route::resource('produtos', 'ProdutoController');

Route::resource('evolucaos', 'EvolucaoController');

Route::resource('perfils', 'PerfilController');

Route::resource('projectos', 'ProjectoController');

Route::resource('alocacaos', 'AlocacaoController');

Route::resource('fases', 'FaseController');

Route::get('trabalhador/profile','UserController@profile');
Route::post('profile','UserController@udate_foto');