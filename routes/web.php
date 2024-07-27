<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home' , [HomeController::class, 'page']);

Route::get('/about' , [HomeController::class, 'aboutpage']);

Route::get('/contact', [HomeController::class, 'showpage']);
Route::post('/contact', [HomeController::class, 'submitform'])->name('contact.submit');;