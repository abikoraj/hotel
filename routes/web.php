<?php

use App\Http\Controllers\AmenityController;
use App\Http\Controllers\RoomCategoryController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
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
    return view('index');
});

Route::match(['get', 'post'], 'login', [UserController::class, 'login'])->name('login');
Route::match(['get', 'post'], 'register', [UserController::class, 'register'])->name('register');



Route::prefix('room-category')->name('roomCategory.')->group(function () {
    Route::get('/', [RoomCategoryController::class, 'index'])->name('index');
    Route::post('/submit', [RoomCategoryController::class, 'submit'])->name('submit');
    Route::get('/delete/{roomCategory}', [RoomCategoryController::class, 'delete'])->name('delete');
});
Route::prefix('amenities')->name('amenities.')->group(function () {
    Route::get('/', [AmenityController::class, 'index'])->name('index');
    Route::post('/submit', [AmenityController::class, 'submit'])->name('submit');
    Route::get('/delete/{amenity}', [AmenityController::class, 'delete'])->name('delete');
});
Route::prefix('room')->name('room.')->group(function () {
    Route::get('/list', [RoomController::class, 'list'])->name('list');
    Route::get('/create', [RoomController::class, 'create'])->name('create');
    Route::post('/submit', [RoomController::class, 'submit'])->name('submit');
    Route::get('/delete/{room}', [RoomController::class, 'delete'])->name('delete');
});
Route::prefix('service')->name('service.')->group(function () {
    Route::get('/', [ServiceController::class, 'index'])->name('index');
    Route::post('/submit', [ServiceController::class, 'submit'])->name('submit');
    Route::get('/delete/{service}', [ServiceController::class, 'delete'])->name('delete');
});
