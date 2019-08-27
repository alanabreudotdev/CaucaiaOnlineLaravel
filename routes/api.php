<?php

use Illuminate\Http\Request;
use App\Page;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
Auth::guard('api')->user(); // instance of the logged user
Auth::guard('api')->check(); // if a user is authenticated
Auth::guard('api')->id(); // the id of the authenticated user

*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return Auth::guard('api')->user();

});

    /**
     * RECLAMACAO API
     */

    Route::post('cadastrar', 'Auth\RegisterController@registerAPI');
    Route::post('entrar', 'Auth\LoginController@loginAPI');
    Route::get('sair', 'Auth\LoginController@logoutAPI');
    Route::get('register/activate/{token}', 'Auth\RegisterController@registerActivate');

    //noticias
    Route::get('noticias-index','API\v1\IndexController@noticiasListar');
    Route::get('noticias-ver','API\v1\IndexController@noticiasVer');

    //Empresas
    Route::get('empresas-categorias','API\v1\EmpresasController@getCategorias');
    Route::get('empresas','API\v1\EmpresasController@getEmpresas');
    Route::get('empresa','API\v1\EmpresasController@getEmpresa');
    Route::get('empresa-review','API\v1\EmpresasController@updateReview');

Route::group(['middleware' => 'auth:api'], function(){

  Route::get('reclamacao-categorias','API\v1\ReclamacaoController@getReclamaCategories');
  Route::get('reclamacao-subcategorias','API\v1\ReclamacaoController@getReclamaSubCategories');
  Route::get('reclamacao-index','API\v1\ReclamacaoController@getReclamacao');
  Route::get('reclamacao-apoio','Front\ReclamarController@ajaxApoio');
  Route::get('reclamacao-ver','API\v1\ReclamacaoController@getReclamacaoView');
  Route::post('reclamacao-postar','API\v1\ReclamacaoController@postReclamacao');
  Route::post('user-update','API\v1\ReclamacaoController@userUpdate');
  Route::get('reclamacao-abuso','API\v1\ReclamacaoController@reportarAbuso');



  Route::get('paginas', function() {
        // If the Content-Type and Accept headers are set to 'application/json',
        // this will return a JSON structure. This will be cleaned up later.
        return Page::all();
    });

});
