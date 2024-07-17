<?php

use App\Http\Controllers\Website\BasicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BasicController::class, 'home'])->name('website.home');
Route::get('/about', [BasicController::class, 'about'])->name('website.about');
Route::get('/services', [BasicController::class, 'services'])->name('website.services');
Route::get('/contact', [BasicController::class, 'contact'])->name('website.contact');