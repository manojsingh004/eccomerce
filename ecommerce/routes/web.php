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

Route::get('/', 'MainController@home');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('products','ProductsController');
Route::resource('in_shopping_carts','InShoppingCartController',[
	'only'=>['store', 'destroy']
	]);
