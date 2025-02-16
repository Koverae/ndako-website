<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/request-demo', [HomeController::class, 'demo'])->name('demo');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact');
Route::get('/privacy-policy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');

Route::post('/contact-us', [HomeController::class, 'storeContact'])->name('contact.store');
Route::post('/request-demo', [HomeController::class, 'storeDemo'])->name('demo.store');
