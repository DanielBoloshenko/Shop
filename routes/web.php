<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\CatalogController;

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

Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/about-us', [AboutUsController::class, 'aboutUs'])->name('aboutUs');

Route::get('/catalog', [CatalogController::class, 'catalog'])->name('catalog');
Route::get('/catalog/category/', [CatalogController::class, 'category'])->name('category');
Route::get('/catalog/category/{id}/details/{product_id}', [CatalogController::class, 'details'])->name('details');
