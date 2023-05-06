<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware(['auth:api'])->group(function () {

    Route::get('/room-list', [RoomController::class, 'apiList']);
    Route::get('/room/{id}', [RoomController::class, 'apiViewRoom']);

    Route::get('/service-list', [ServiceController::class, 'apiList']);
    Route::get('/service/{id}', [ServiceController::class, 'apiViewService']);

    Route::post('/booking', [BookingController::class, 'apiBooking']);
});
Route::post('/user/register', [UserController::class, 'apiRegister']);
Route::post('/user/login', [UserController::class, 'apiLogin']);

