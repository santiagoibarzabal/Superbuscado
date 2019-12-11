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


// --------------------- Index --------------------- //

Route::get('/', function() {
   return view ('landing');
});


// --------------------- Contact --------------------- //

Route::get('/contact', function(){
    return view ('contact');
});

// --------------------- FAQ --------------------- //

Route::get('/faq', function(){
    return view ('faq');
});


// --------------------- Login y Register --------------------- //

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth/verified', function(){
  return view ('/auth/verified');
});


// --------------------- Addresses --------------------- //

Route::group(['middleware'=>'auth'],function(){


// Route::get('/addresses', 'AddressesController@index');

Route::get('/addresses/new', 'AddressesController@create');

Route::post('/addresses', 'AddressesController@store');

Route::patch('/addresses', 'AddressesController@update');

Route::get('/addresses/edit', 'AddressesController@edit');

Route::delete('/addresses', 'AddressesController@destroy');

Route::get('/addresses', 'AddressesController@show');

});


// --------------------- Cart --------------------- //

Route::group(['middleware'=>'auth'],function(){

  Route::get('/carts/new', 'CartsController@create');

  Route::post('/carts', 'CartsController@store');

  Route::get('/carts/{id}/edit', 'CartsController@edit');

  Route::get('/listings/{id}/carts', 'CartsController@index');

  Route::get('/listings/{id}/carts/{store}', 'CartsController@show');

  Route::patch('/carts/{id}', 'CartsController@update');

  Route::delete('/carts/{id}', 'CartsController@destroy');

});

// --------------------- Categories --------------------- //

Route::get('/categories', 'CategoriesController@index');

Route::get('/categories/new', 'CategoriesController@create');

Route::post('/categories', 'CategoriesController@store');

Route::get('/categories/{id}/edit', 'CategoriesController@edit');

Route::patch('/categories/{id}', 'CategoriesController@update');

Route::delete('/categories/{id}', 'CategoriesController@destroy');

Route::get('/categories/{id}', 'CategoriesController@show');


// --------------------- Listings --------------------- //
// Validacion de User logeado para acceso a todas las Rutas

Route::group(['middleware'=>'auth'],function(){

  Route::get('/listings', 'ListingsController@index');

  Route::get('/listings/new', 'ListingsController@create');

  Route::post('/listings', 'ListingsController@store');

  Route::get('/listings/{id}/edit', 'ListingsController@edit');

  Route::patch('/listings/{id}', 'ListingsController@update');

  Route::delete('/listings/{listing}', 'ListingsController@destroy');

  Route::get('/listings/{id}', 'ListingsController@show');

});



// --------------------- Listing Products --------------------- //

Route::group(['middleware'=>'auth'],function(){

  Route::get('/listings/{listing}/products/add', 'ListingProductsController@index');

  Route::post('/listings/{listing}/products/add/{id}', 'ListingProductsController@add');

  Route::post('/listings/{listing}/products/{id}', 'ListingProductsController@update');

  Route::get('/listings/{listing}/products/{id}', 'ListingProductsController@show');

  Route::get('/listings/{listing}/products/find/{category}/{child}', 'ListingProductsController@find');

  Route::delete('/listings/{listing}/products/{product}', 'ListingProductsController@destroy');

});



// --------------------- Markets --------------------- //

Route::get('/markets', 'MarketsController@index');

Route::get('/markets/new', 'MarketsController@create');

Route::post('/markets', 'MarketsController@store');

Route::get('/markets/{id}/edit', 'MarketsController@edit');

Route::patch('/markets/{id}', 'MarketsController@update');

Route::delete('/markets/{id}', 'MarketsController@destroy');

Route::get('/markets/{id}', 'MarketsController@show');


// --------------------- Products --------------------- //

Route::get('/products', 'ProductsController@index');

Route::get('/products/new', 'ProductsController@create');

Route::post('/products', 'ProductsController@store');

Route::get('/products/{id}/edit', 'ProductsController@edit');

Route::patch('/products/{id}', 'ProductsController@update');

Route::delete('/products/{id}', 'ProductsController@destroy');

Route::get('/products/{id}', 'ProductsController@show');


// --------------------- Stocks --------------------- //

Route::get('/stocks', 'StocksController@index');

Route::get('/stocks/new', 'StocksController@create');

Route::post('/stocks', 'StocksController@store');

Route::get('/stocks/{id}/edit', 'StocksController@edit');

Route::patch('/stocks/{id}', 'StocksController@update');

Route::delete('/stocks/{id}', 'StocksController@destroy');

Route::get('/stocks/{id}', 'StocksController@show');


// --------------------- Stores --------------------- //

Route::get('/stores', 'StoresController@index');

Route::get('/stores/new', 'StoresController@create');

Route::post('/stores', 'StoresController@store');

Route::get('/stores/{id}/edit', 'StoresController@edit');

Route::patch('/stores/{id}', 'StoresController@update');

Route::delete('/stores/{id}', 'StoresController@destroy');

Route::get('/stores/{id}', 'StoresController@show');


// --------------------- Users --------------------- //

Route::group(['middleware'=>'auth'],function(){

  Route::get('/users', 'UsersController@index');

  Route::get('/users/new', 'UsersController@create');

  Route::post('/users', 'UsersController@store');

  Route::get('/users/edit', 'UsersController@edit');

  Route::patch('/users', 'UsersController@update');

  Route::delete('/users/{id}', 'UsersController@destroy');

  Route::get('/users/{id}', 'UsersController@show');


  // --------------------- Profile --------------------- //

  Route::get('/profile', 'UsersController@profile');

  Route::patch('/profile', 'UsersController@update');

});

  Route::get('/init', function () {
     Artisan::call('storage:link');
     return 'ready!';
  });
