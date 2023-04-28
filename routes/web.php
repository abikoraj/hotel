<?php

use App\Http\Controllers\RoomCategoryController;
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
    Route::post('/update/{roomCategory}', [RoomCategoryController::class, 'update'])->name('update');
    Route::get('/delete/{roomCategory}', [RoomCategoryController::class, 'delete'])->name('delete');
});
