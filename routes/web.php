<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\guestsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Admindashboard', [DashboardController::class, 'Admindashboard'])->name('Admindashboard');

// DB guest

Route::get('/Dbguests', [guestsController::class, 'guests'])->name('Dbguest');
Route::get('/guestsInsert', [guestsController::class, 'insert'])->name('guestInsert');
Route::post('/guestsStore', [guestsController::class, 'Store']);
Route::get('/guestsedit/{id}', [guestsController::class, 'edit']);
Route::post('/guestsupdate/{id}', [guestsController::class, 'update']);
Route::get('/guestsdelete/{id}', [guestsController::class, 'delete']);
