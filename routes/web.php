<?php


Route::get('/', function () {
    return view('welcome');
});

$this->group(['middleware' => ['auth'], 'namespace' => 'Cadastro', 'prefix' => 'cadastro'], function(){

    $this->get('ver-contas', 'ContaController@listarContas')->name('ver.contas');
    $this->get('conta', 'ContaController@preparaCadastro')->name('nova.conta');
    $this->post('conta', 'ContaController@cadastra')->name('cadastra.conta');

    $this->get('ver-cartoes', 'CartaoUsuarioController@listarCartoes')->name('ver.cartoes');
    $this->get('cartao', 'CartaoUsuarioController@preparaCadastro')->name('novo.usuariocartao');
    $this->post('cartao', 'CartaoUsuarioController@cadastra')->name('cadastra.usuariocartao');

    $this->get('ver-categorias', 'CategoriaController@listarCategorias')->name('ver.categorias');
    $this->get('categoria', 'CategoriaController@preparaCadastro')->name('nova.categoria');
    $this->post('categoria', 'CategoriaController@cadastra')->name('cadastra.categoria');



});

$this->get('meu-perfil', 'UserController@perfil')->name('perfil')->middleware('auth');
$this->post('atualizar-perfil', 'UserController@profileUpdate')->name('profile.update')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('dashboard');

Auth::routes();

