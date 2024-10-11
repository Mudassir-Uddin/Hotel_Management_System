<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\guestsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\roomsController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Website

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/rooms', [HomeController::class, 'rooms'])->name('rooms');
Route::get('/contactus', [HomeController::class, 'contactus'])->name('contactus');

// Dashboard

Route::get('/Admindashboard', [DashboardController::class, 'Admindashboard'])->name('Admindashboard');

// DB guest

Route::get('/Dbguests', [guestsController::class, 'guests'])->name('Dbguest');
Route::get('/guestsInsert', [guestsController::class, 'insert'])->name('guestInsert');
Route::post('/guestsStore', [guestsController::class, 'Store']);
Route::get('/guestsedit/{id}', [guestsController::class, 'edit']);
Route::post('/guestsupdate/{id}', [guestsController::class, 'update']);
Route::get('/guestsdelete/{id}', [guestsController::class, 'delete']);

// DB rooms

Route::get('/Dbrooms', [roomsController::class, 'rooms'])->name('Dbroom');
Route::get('/roomsInsert', [roomsController::class, 'insert'])->name('roomInsert');
Route::post('/roomsStore', [roomsController::class, 'Store']);
Route::get('/roomsedit/{id}', [roomsController::class, 'edit']);
Route::post('/roomsupdate/{id}', [roomsController::class, 'update']);
Route::get('/roomsdelete/{id}', [roomsController::class, 'delete']);

// DB reservations

Route::get('/Dbreservations', [ReservationsController::class, 'reservations'])->name('Dbreservation');
Route::get('/reservationsInsert', [reservationsController::class, 'insert'])->name('reservationInsert');
Route::post('/reservationsStore', [reservationsController::class, 'Store']);
Route::get('/reservationsedit/{id}', [reservationsController::class, 'edit']);
Route::post('/reservationsupdate/{id}', [reservationsController::class, 'update']);
Route::get('/reservationsdelete/{id}', [reservationsController::class, 'delete']);

// DB payments

Route::get('/Dbpayments', [PaymentController::class, 'payments'])->name('Dbpayment');
Route::get('/paymentsInsert', [paymentController::class, 'insert'])->name('paymentInsert');
Route::post('/paymentsStore', [paymentController::class, 'Store']);
Route::get('/paymentsedit/{id}', [paymentController::class, 'edit']);
Route::post('/paymentsupdate/{id}', [paymentController::class, 'update']);
Route::get('/paymentsdelete/{id}', [paymentController::class, 'delete']);

// DB Staff

Route::get('/Dbstaffs', [StaffController::class, 'Staff'])->name('Dbstaff');
Route::get('/staffsInsert', [staffController::class, 'insert'])->name('staffInsert');
Route::post('/staffsStore', [staffController::class, 'Store']);
Route::get('/staffsedit/{id}', [staffController::class, 'edit']);
Route::post('/staffsupdate/{id}', [staffController::class, 'update']);
Route::get('/staffsdelete/{id}', [staffController::class, 'delete']);
