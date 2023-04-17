<?php

use Illuminate\Support\Facades\Route;

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

// Inserimento rotte

Route::get('/', [ComicController::class, 'index'])->name('comics.index');

Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comics.show');

Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');

Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

Route::get('/products/create', 'ProductController@create')->name('products.create');



