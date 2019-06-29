<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('siswa','Api\SiswaController');
Route::resource('catagory','Api\CatagoryController');
Route::resource('artikel','Api\ArtikelController');
Route::resource('tag','Api\TagController');
Route::resource('frontend','frontend\index');
Route::resource('welcome','WelcomeController');

Route::get('videoolahraga','Api\FrontendController@videoolahraga');
Route::get('index','Api\FrontendController@index');
