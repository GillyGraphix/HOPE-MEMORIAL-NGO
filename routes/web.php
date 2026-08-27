<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. NGO / Foundation Homepage (Main Page)
Route::get('/', function () {
    return view('welcome');
});

// 2. Dispensary Patient Portal (Hospital Page)
Route::get('/dispensary', function () {
    return view('dispensary');
});
Route::get('/donate', function () {
    return view('donate');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/foundation', function () {
     return view('foundation');
});
Route::get('/our_work', function () {
     return view('our_work');
});