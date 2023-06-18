<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CinemaController;
use App\Http\Controllers\HallController;
use App\Http\Controllers\SeanceController;
use App\Http\Controllers\SeatsInfoController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/cinema', [CinemaController::class, 'index']);

Route::get('/hall', [HallController::class, 'index']);

Route::get('/seance', [SeanceController::class, 'index']);

Route::get('/seats', [SeatsInfoController::class, 'seatsInfo']);

Route::get('/buy/{ticketId}', [BookingController::class, 'buy']);


