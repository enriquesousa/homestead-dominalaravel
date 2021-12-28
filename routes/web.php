<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     return view('welcome');
// })->name('main');

// Resolviendo la pagina raiz con un controlador
Route::get('/', 'MainController@index')->name('main');

// Rutas CRUD products
Route::get('products', 'ProductController@index')->name('products.index');
Route::get('products/create', 'ProductController@create')->name('products.create');
Route::post('products', 'ProductController@store')->name('products.store');
Route::get('products/{product}', 'ProductController@show')->name('products.show');
Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit');
Route::match(['put', 'patch'], 'products/{product}', 'ProductController@update')->name('products.update');
Route::delete('products/{product}','ProductController@destroy')->name('products.destroy');


