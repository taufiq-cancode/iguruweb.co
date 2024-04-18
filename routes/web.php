<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/our-services', function () {
    return view('services');
})->name('services');

Route::get('/our-games', function () {
    return view('games');
})->name('games');

Route::get('/our-team', function () {
    return view('team');
})->name('team');

Route::get('/join', function () {
    return view('join');
})->name('join');

Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/igaming-consult', function () {
    return view('igaming-consult');
})->name('igaming-consult');

Route::get('/licensing', function () {
    return view('licensing');
})->name('licensing');

Route::post('/contact/submit', [ContactController::class, 'submitContact'])->name('contact.submit');
Route::post('/join/submit', [ContactController::class, 'submitJoin'])->name('join.submit');