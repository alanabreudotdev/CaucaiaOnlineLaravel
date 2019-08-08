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
    Route::get('reclamacao-categorias','API\v1\IndexController@getReclamaCategories');
    Route::post('cadastrar', 'Auth\RegisterController@registerAPI');
    Route::post('entrar', 'Auth\LoginController@loginAPI');
    Route::post('sair', 'Auth\LoginController@logoutAPI');

Route::group(['middleware' => 'auth:api'], function(){
    
    Route::get('paginas', function() {
        // If the Content-Type and Accept headers are set to 'application/json', 
        // this will return a JSON structure. This will be cleaned up later.
        return Page::all();
    });
    
});

