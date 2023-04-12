<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HFHomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

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

Route::group([], function() {
    Route::get('/', [HFHomeController::class, 'index'])->name('hfhome');
    Route::get('/services', [ServicesController::class, 'index'])->name('services');
    Route::get('/about-us', [AboutController::class, 'index'])->name('about-us');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::post('/contact/create', [ContactController::class, 'store'])->name('contact.create');
    Route::get('/contact/success', [ContactController::class, 'contactSuccess'])->name('contact.success');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
