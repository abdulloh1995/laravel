<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contact/all', 'App\Http\Controllers\ContactController@allDate')->name('contact-date');
Route::post('/contact/submit', 'App\Http\Controllers\ContactController@submit')->name('contact-form');
