<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomTypeController;

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

Route::get('gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('details', function () {
    return view('details');
})->name('details');

Route::get('/apartments/{id}', [RoomTypeController::class, 'show'])->name('apartments');

Route::get('contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('receipt', function () {
    return view('receipt');
})->name('receipt');

Route::get('adminpanel', function () {
    return view('adminpanel');
})->name('adminpanel');

Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback');

Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation');

Auth::routes([
    'register' => true,
    'reset' => true,
    'verify' => true,
  ]);
  
