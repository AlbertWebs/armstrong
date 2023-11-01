<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/order', [App\Http\Controllers\HomeController::class, 'wine'])->name('wine');
Route::get('/wine/{type}', [App\Http\Controllers\HomeController::class, 'wine'])->name('wine');
Route::get('/spirit/{type}', [App\Http\Controllers\HomeController::class, 'spirit'])->name('spirit');
Route::get('/beer/{type}', [App\Http\Controllers\HomeController::class, 'beer'])->name('beer');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact-us');


Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');



Route::get('/shopping-cart', [App\Http\Controllers\HomeController::class, 'shopping'])->name('shopping');

Auth::routes();
