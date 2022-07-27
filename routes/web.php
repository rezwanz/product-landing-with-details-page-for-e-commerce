<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class, 'index']);
Route::get('/about',[HomeController::class, 'about'])->name('about');
Route::get('/support',[HomeController::class, 'support'])->name('support');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::get('/product-details/{id}',[HomeController::class, 'productDetails'])->name('details');
