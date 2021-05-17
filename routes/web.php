<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('reservation', function () {
    return view('reservation');
})->name('reservation');

Route::get('gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('details', function () {
    return view('details');
})->name('details');

Route::get('apartments', function () {
    return view('apartments');
})->name('apartments');
