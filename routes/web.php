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



Route::get('/', function(){
  echo 'ok!';
});
*/
Route::get('/', 'HomeController@index')->name('home');

//ROTAS RECLAMAÇÃO
Route::get('/reclamar', 'Front\\ReclamarController@index')->name('reclamacao.front.index');
Route::post('/reclamar', 'Front\\ReclamarController@reclamarPost')->middleware('auth')->name('reclamacao.front.post');
Route::get('/reclamar/{id}', 'Front\\ReclamarController@reclamarOpen')->middleware('auth','verified')->name('reclamacao.front.open');
Route::get('/reclamar/listar/{id}', 'Front\\ReclamarController@reclamarListar')->name('reclamacao.front.listar');
Route::get('/reclamar/ver/{id}/{slug}', 'Front\\ReclamarController@reclamarVer')->name('reclamacao.front.ver');
Route::post('/reclamar/responder','Front\ReclamarController@reclamacaoResponder')->name('reclamacao.front.responder');
Route::get('/reclamar/apoio/{id}/{user_id}','Front\ReclamarController@ajaxApoio');

//ROTAS NOTICIAS
Route::get('/noticias','Front\\NoticiasController@index')->name('noticias.front.index');
Route::get('/noticias/categoria/{id}', 'Front\\NoticiasController@porCategoria')->name('noticias.front.porcategoria');
Route::get('/noticias/{id}/{slug}', 'Front\\NoticiasController@noticiasVer')->name('noticias.front.ver');
Route::post('/noticias/pesquisa', 'Front\\NoticiasController@search')->name('noticias.front.pesquisa');


//ROTA CLASSIFICADOS

Route::get('/classificados','Front\\ClassificadosController@index')->name('classificados.front.index');
Route::get('/classificados/categorias','Front\\ClassificadosController@categoriasListar')->name('classificados.front.categorias');
Route::get('/classificados/listar','Front\\ClassificadosController@index')->name('classificados.front.list');
Route::get('/classificados/anunciar','Front\\ClassificadosController@novoanuncio')->middleware('auth')->name('classificados.front.anunciar');
Route::post('/classificados/anunciar','Front\\ClassificadosController@novoanuncioPost')->middleware('auth')->name('classificados.front.anunciar.post');

// Authentication Routes...
Route::get('entrar', 'Auth\LoginController@showLoginForm')->name('entrar');
Route::post('entrar', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('sair');


Route::get('cadastrar', 'Auth\RegisterController@showRegistrationForm')->name('cadastrar');
Route::post('cadastrar', 'Auth\RegisterController@register');

//ROTAS PRA FRONT
Route::get('/usuario/perfil','Front\UsuarioController@perfil')->middleware('auth')->name('usuario.perfil');
Route::post('/usuario/perfil','Front\UsuarioController@perfilPost')->middleware('auth')->name('usuario.perfil.post');
Route::get('/usuario/foto','Front\UsuarioController@foto')->middleware('auth')->name('usuario.foto');
Route::post('/usuario/foto','Front\UsuarioController@fotoPost')->middleware('auth')->name('usuario.foto.post');
Route::get('/usuario/conta','Front\UsuarioController@conta')->middleware('auth')->name('usuario.conta');
Route::post('/usuario/conta','Front\UsuarioController@contaPost')->middleware('auth')->name('usuario.conta.post');
//Route::get('/usuario/lugares','Front\UsuarioController@perfil')->middleware('auth')->name('usuario.lugares');
//Route::get('/usuario/anuncios','Front\UsuarioController@perfil')->middleware('auth')->name('usuario.anuncios');
Route::get('/usuario/reclamacoes','Front\UsuarioController@reclamacoes')->middleware('auth')->name('usuario.reclamacoes');



//ROTAS PARA ADMIN
Route::group([ 'prefix' => 'admin', 'middleware' => ['auth', 'roles','verified'], 'roles' => 'admin'], function () {
    Route::get('/','Admin\AdminController@index')->name('admin');
    Route::get('usuarios','Admin\AdminController@index')->name('admin.usuarios');
    Route::get('noticias','Admin\AdminController@index')->name('admin.noticias');
    Route::get('sistema','Admin\AdminController@index')->name('admin.sistema');

    Route::resource('roles', 'Admin\RolesController', ['as' => 'roles']);
    Route::resource('permissions', 'Admin\PermissionsController', ['as' => 'permissions']);
    Route::resource('users', 'Admin\UsersController', ['as' => 'users']);
    Route::resource('pages', 'Admin\PagesController', ['as' => 'pages']);
    Route::resource('activitylogs', 'Admin\ActivityLogsController', ['as' => 'activitylogs'])->only([
        'index', 'show', 'destroy'
    ]);
    Route::resource('settings', 'Admin\SettingsController', ['as' => 'settings']);
    Route::get('generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
    Route::post('generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);

    //NEWS
    Route::resource('news-category', 'Admin\\NewsCategoryController');
    Route::resource('news', 'Admin\\NewsController');

    //RECLAMAÇÃO
    Route::resource('reclamacao', 'Admin\\ReclamacaoController');
    Route::resource('reclama-category', 'Admin\\ReclamaCategoryController');
    Route::resource('reclama-sub-category', 'Admin\\ReclamaSubCategoryController');
    Route::get('reclamacao-categorias/{id}','Admin\\ReclamacaoController@reclamacaoCategorias');
    Route::resource('reclama-answer', 'Admin\\ReclamaAnswerController');

    //CLASSIFICADOS
    Route::resource('classificado-category', 'Admin\\ClassificadoCategoryController');
    Route::resource('classificado-item', 'Admin\\ClassificadoItemController');
});



//ROTAS PARA GERENCIADOR
Route::group([ 'prefix' => 'gerenciador', 'middleware' => ['auth', 'roles'], 'roles' => 'gerenciador'], function () {
    Route::get('/','Gerenciador\GerenciadorController@index')->name('gerenciador');
    Route::get('reclamacao/{id}','Gerenciador\ReclamacaoController@reclamacaoVer')->name('gerenciador.reclamacao.ver');
    Route::post('reclamacao/responder','Gerenciador\ReclamacaoController@reclamacaoResponder')->name('gerenciador.reclamacao.responder');


});

Auth::routes(['verify' => true]);
//Auth::routes();







Route::resource('admin/reclama-apoio', 'Admin\\ReclamaApoioController');
