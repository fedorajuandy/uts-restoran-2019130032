<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TestimonialsController;

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

Route::get(
    '/about',
    AboutController::class
)->name('about');

Route::get(
    '/',
    IndexController::class
)->name('index');

Route::get(
    '/products',
    ProductsController::class
)->name('products');

Route::get(
    '/testimonials',
    TestimonialsController::class
)->name('testimonials');
