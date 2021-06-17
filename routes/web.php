<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\AdminClientsController;
use App\Http\Controllers\AdminSettlingController;
use App\Http\Controllers\AdminFeedbackController;
use App\Http\Controllers\AdminReservationController;
use App\Http\Controllers\AdminRoomsController;

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

Route::get('admin-reservations', function () {
    return view('admin-reservations');
})->name('admin-reservations');

Route::get('admin-settling', function () {
    return view('admin-settling');
})->name('admin-settling');

Route::get('admin-clients', function () {
    return view('admin-clients');
})->name('admin-clients');

Route::get('admin-feedback', function () {
    return view('admin-feedback');
})->name('admin-feedback');

Route::get('admin-reports', function () {
    return view('admin-reports');
})->name('admin-reports');

Route::get('admin-rooms', function () {
    return view('admin-rooms');
})->name('admin-rooms');

Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback');

Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation');

Route::get('/get-reservations', [AdminReservationController::class, 'index'])->name('get-reservations');

Route::delete('/delete-reservations/{id}', [AdminReservationController::class, 'destroy'])->name('delete-reservations');

Route::get('/get-clients', [AdminClientsController::class, 'index'])->name('get-clients');

Route::delete('/delete-clients/{id}', [AdminClientsController::class, 'destroy'])->name('delete-clients');

Route::get('/get-feedbacks', [AdminFeedbackController::class, 'index'])->name('get-feedbacks');

Route::delete('/delete-feedbacks/{id}', [AdminFeedbackController::class, 'destroy'])->name('delete-feedbacks');

Route::get('/get-settlings', [AdminSettlingController::class, 'index'])->name('get-settlings');

Route::delete('/delete-settlings/{id}', [AdminSettlingController::class, 'destroy'])->name('delete-settlings');

Route::get('/get-rooms', [AdminRoomsController::class, 'index'])->name('get-rooms');

Route::delete('/delete-rooms/{id}', [AdminRoomsController::class, 'destroy'])->name('delete-rooms');

Auth::routes([
    'register' => true,
    'reset' => true,
    'verify' => true,
  ]);
  
