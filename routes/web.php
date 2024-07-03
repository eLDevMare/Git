<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return inertia::render('Test');
});


Route::get('/halo', function () {
    return ('Halo aldi');
});


Route::get('test', function () {
    return ('ubah 1');
});


Route::get('al gahaza', function () {
    return ('kentod');
});