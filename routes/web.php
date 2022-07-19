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
 

Route::resource('ingredients', App\Http\Controllers\IngredientController::class)->only([
    'index'
]);
Route::resource('dishes', App\Http\Controllers\DishController::class)->only([
    'index'
]);
Route::resource('/', App\Http\Controllers\HomeController::class)->only([
    'index'
]);
Route::resource('purchases', App\Http\Controllers\PurchaseController::class)->only([
    'index'
]);


Route::get('orders', [App\Http\Controllers\OrderController::class, 'index'])->name('orders');
Route::get('orders/create', [App\Http\Controllers\OrderController::class, 'create'])->name('order.create');