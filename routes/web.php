<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/request-demo', [HomeController::class, 'demo'])->name('demo');
Route::get('/start', [HomeController::class, 'start'])->name('start');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact');
Route::get('/privacy-policy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');
// Ndako On Premise
Route::get('/download', [HomeController::class, 'download'])->name('download');

Route::post('/contact-us', [HomeController::class, 'storeContact'])->name('contact.store');
Route::post('/request-demo', [HomeController::class, 'storeDemo'])->name('demo.store');

Route::get('/blog', [HomeController::class, 'blog'])->name('blog.index');
Route::get('/blog/{slug}', [HomeController::class, 'blogShow'])->name('blog.show');
