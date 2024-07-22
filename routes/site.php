<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\BasicController;
use App\Http\Controllers\Website\ContactController;

Route::get('/', [BasicController::class, 'home'])->name('website.home');
Route::get('/about', [BasicController::class, 'about'])->name('website.about');
Route::get('/services', [BasicController::class, 'services'])->name('website.services');
Route::get('/contact', [BasicController::class, 'contact'])->name('website.contact');
Route::get('/proservices', [BasicController::class, 'proservices'])->name('website.proservices');
Route::get('/governmentservices', [BasicController::class, 'governmentservices'])->name('website.governmentservices');
Route::get('/translationservices', [BasicController::class, 'translationservices'])->name('website.translationservices');
Route::get('/notaryattestation', [BasicController::class, 'notaryattestation'])->name('website.notaryattestation');
Route::get('/goingdigital', [BasicController::class, 'goingdigital'])->name('website.goingdigital');
Route::get('/certificateattestation', [BasicController::class, 'certificateattestation'])->name('website.certificateattestation');
Route::get('/managementconsulting', [BasicController::class, 'managementconsulting'])->name('website.managementconsulting');
Route::get('/commercialbrokerage', [BasicController::class, 'commercialbrokerage'])->name('website.commercialbrokerage');
Route::get('/customizedgift', [BasicController::class, 'customizedgift'])->name('website.customizedgift');
Route::get('/eventmanagement', [BasicController::class, 'eventmanagement'])->name('website.eventmanagement');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');