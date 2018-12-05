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

/*Route::get('/', function () {


    return view('products.index');
});*/

Auth::routes();


Route::group(['middleware' => ['web']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', 'ProductController@index');
    Route::get('/products', 'ProductController@index');
    Route::get('/product/{id}','ProductController@getDetails');
    Route::get('/categories', 'CategoryController@index');
    Route::get('/category/{id}', 'CategoryController@getDetails');
    Route::get('/cart', 'ShoppingCartController@index');
    Route::get('/kill', 'ShoppingCartController@killSession');
    Route::get('/cart/add/{id}', 'ShoppingCartController@addToCart');
    Route::get('/changeamount/{id}', 'ShoppingCartController@changeAmount');
});