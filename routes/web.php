<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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
    return view('front.home');
});

Route::middleware(['guest'])->group(function () {
    Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register.form');
    Route::post('register', [AuthController::class, 'register'])->name('register');
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('login', [AuthController::class, 'login'])->name('login');
});


Route::middleware(['auth'])->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('admin', [AdminController::class, 'dashboard'])->name('admin');
    Route::resource('admin/users', UserController::class);

});
