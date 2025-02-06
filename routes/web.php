<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Auth;




Route::get('/', function () {
    return view('index');
});


Route::get('/program', function () {
    return view('program');
});

Route::get('/internship', function () {
    return view('internship');
})->name('internship');






Route::get('/application_success', function () {
    return view('application_success');
})->name('application_success');

Route::get('/application_search', function () {
    return view('application_search');
})->name('application_search');


Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');



// Authentication Routes
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected Home Route
Route::get('/home', function () {
    // Pass the authenticated user's data to the view
    return view('home_page_after_login', ['user' => Auth::user()]);
})->middleware('auth')->name('home');
