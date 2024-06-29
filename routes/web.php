<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\BiodataController;


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('forgot-password');
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('forgot-password.send');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset-password');
Route::post('reset-password', [ForgotPasswordController::class, 'resetPassword'])->name('reset-password.update');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/', function () {
    return view('image');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('loading');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::post('/checkin', [App\Http\Controllers\AttendanceController::class, 'checkIn']);
Route::post('/checkout', [App\Http\Controllers\AttendanceController::class, 'checkOut']);


Route::post('/absen/masuk', [AbsenController::class, 'absenMasuk']);
Route::post('/absen/pulang', [AbsenController::class, 'absenPulang']);


Route::get('/biodata', [BiodataController::class, 'index']);



// Route::get('/home', [HomeController::class, 'index']);


// Route::get('/register', function () {
//     return view('register');
// });
