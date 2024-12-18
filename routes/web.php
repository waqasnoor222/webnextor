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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contactUs'])->name('contactUs');
Route::get('/web-copyRighting', [App\Http\Controllers\HomeController::class, 'webcopyRighting'])->name('webcopyRighting');
Route::get('/video-animation', [App\Http\Controllers\HomeController::class, 'videoAnimation'])->name('videoAnimation');
Route::get('/logo-design', [App\Http\Controllers\HomeController::class, 'logoDesign'])->name('logoDesign');
Route::get('/website-development', [App\Http\Controllers\HomeController::class, 'websiteDevelopment'])->name('websiteDevelopment');
Route::get('/ecommerce', [App\Http\Controllers\HomeController::class, 'ecommerce'])->name('ecommerce');
Route::get('/web-app', [App\Http\Controllers\HomeController::class, 'webApp'])->name('webApp');
Route::get('/seo', [App\Http\Controllers\HomeController::class, 'seo'])->name('seo');
Route::get('/smm', [App\Http\Controllers\HomeController::class, 'smm'])->name('smm');
Route::get('/portfolio', [App\Http\Controllers\HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/our-packages', [App\Http\Controllers\HomeController::class, 'ourpackages'])->name('ourpackages');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/privacy', [App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy');
Route::get('/terms', [App\Http\Controllers\HomeController::class, 'terms'])->name('terms');