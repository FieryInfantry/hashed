<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('register');
});

// Route to handle registration form submission
Route::post('/register', [UserController::class, 'store']);

// Route to show the registration success page
Route::get('/registration-success', function () {
    return view('registration_success');
})->name('registration.success');
Route::get('/login-success', function () {
    return view('login_success');
})->name('login.success');

// Route to show login form and handle login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
// Logout route