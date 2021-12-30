<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Resolviendo la pagina raíz con un controlador
Route::get('/', 'MainController@index')->name('main');

// Rutas CRUD products en una sola linea
Route::resource('products', 'ProductController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
