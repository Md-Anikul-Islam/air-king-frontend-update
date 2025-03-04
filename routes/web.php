<?php

use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/product', [HomeController::class,'product'])->name('product');
Route::get('/team', [HomeController::class,'team'])->name('team');
Route::get('/gallery', [HomeController::class,'gallery'])->name('gallery');


//Request to buy
Route::post('/product-request', [HomeController::class,'productRequest'])->name('product.request');
