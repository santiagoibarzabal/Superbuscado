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

Route::get('/', function() {
   return ('BIENVENIDO');
});

// RUTAS PARA LOGIN Y REGISTER

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// RUTAS PARA ADDRESSES


Route::get('/addresses', 'AddressesController@index');

Route::get('/addresses/new', 'AddressesController@create');

Route::post('/addresses', 'AddressesController@store');

Route::get('/addresses/{id}/edit', 'AddressesController@edit');

Route::patch('/addresses/{id}', 'AddressesController@update');

Route::delete('/addresses/{id}', 'AddressesController@destroy');

Route::get('/addresses/{address}', 'AddressesController@show');


// RUTAS PARA CART

Route::get('/carts', 'CartsController@index');

Route::get('/carts/new', 'CartsController@create');

Route::post('/carts', 'CartsController@store');

Route::get('/carts/{id}/edit', 'CartsController@edit');

Route::patch('/carts/{id}', 'CartsController@update');

Route::delete('/carts/{id}', 'CartsController@destroy');

Route::get('/carts/{id}', 'CartsController@show');


// // RUTAS PARA CATEGORY

Route::get('/categories', 'CategoriesController@index');

Route::get('/categories/new', 'CategoriesController@create');

Route::post('/categories', 'CategoriesController@store');

Route::get('/categories/{id}/edit', 'CategoriesController@edit');

Route::patch('/categories/{id}', 'CategoriesController@update');

Route::delete('/categories/{id}', 'CategoriesController@destroy');

Route::get('/categories/{id}', 'CategoriesController@show');

// RUTAS PARA LIST

Route::get('/lists', 'ListsController@index');

Route::get('/lists/new', 'ListsController@create');

Route::post('/lists', 'ListsController@store');

Route::get('/lists/{id}/edit', 'ListsController@edit');

Route::patch('/lists/{id}', 'ListsController@update');

Route::delete('/lists/{id}', 'ListsController@destroy');

Route::get('/lists/{id}', 'ListsController@show');


// RUTAS PARA MARKET

Route::get('/markets', 'MarketsController@index');

Route::get('/markets/new', 'MarketsController@create');

Route::post('/markets', 'MarketsController@store');

Route::get('/markets/{id}/edit', 'MarketsController@edit');

Route::patch('/markets/{id}', 'MarketsController@update');

Route::delete('/markets/{id}', 'MarketsController@destroy');

Route::get('/markets/{id}', 'MarketsController@show');



// RUTAS PARA PRODUCTS

Route::get('/products', 'ProductsController@index');

Route::get('/products/new', 'ProductsController@create');

Route::post('/products', 'ProductsController@store');

Route::get('/products/{id}/edit', 'ProductsController@edit');

Route::patch('/products/{id}', 'ProductsController@update');

Route::delete('/products/{id}', 'ProductsController@destroy');

Route::get('/products/{id}', 'ProductsController@show');


// RUTAS PARA STOCKS

Route::get('/stocks', 'StocksController@index');

Route::get('/stocks/new', 'StocksController@create');

Route::post('/stocks', 'StocksController@store');

Route::get('/stocks/{id}/edit', 'StocksController@edit');

Route::patch('/stocks/{id}', 'StocksController@update');

Route::delete('/stocks/{id}', 'StocksController@destroy');

Route::get('/stocks/{id}', 'StocksController@show');


// RUTAS PARA STORE

Route::get('/stores', 'StoresController@index');

Route::get('/stores/new', 'StoresController@create');

Route::post('/stores', 'StoresController@store');

Route::get('/stores/{id}/edit', 'StoresController@edit');

Route::patch('/stores/{id}', 'StoresController@update');

Route::delete('/stores/{id}', 'StoresController@destroy');

Route::get('/stores/{id}', 'StoresController@show');


// RUTAS PARA USER

Route::get('/users', 'UsersController@index');

Route::get('/users/new', 'UsersController@create');

Route::post('/users', 'UsersController@store');

Route::get('/users/{id}/edit', 'UsersController@edit');

Route::patch('/users/{id}', 'UsersController@update');

Route::delete('/users/{id}', 'UsersController@destroy');

Route::get('/users/{id}', 'UsersController@show');
