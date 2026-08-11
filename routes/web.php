<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/flowers', function () {
    return view('flowers');
})->name('flowers');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');
