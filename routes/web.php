<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CartController;

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


Auth::routes();

Route::get('/', [MainController::class, 'main'])->name('main');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about-us', [AboutUsController::class, 'aboutUs'])->name('aboutUs');

Route::get('/catalog', [CatalogController::class, 'catalog'])->name('catalog');
Route::get('/catalog/details/{product_id}', [CatalogController::class, 'details'])->name('details');

Route::get('/search', [MainController::class, 'search'])->name('search');


Route::post('/cart/{id}', [CartController::class, 'addToCart'])->name('addToCart');
Route::get('/cart', [CartController::class, 'index'])->name('cartPage');
Route::post('/cart/{id}/delete', [CartController::class, 'deleteFromCart'])->name('deleteFromCart');