<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PortofolioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () { 
    return view('about.show');
})->name('about');

Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/portofolio/{id}', [PortofolioController::class, 'show'])->name('portofolio.show');