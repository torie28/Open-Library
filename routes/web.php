<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ChristianController;
use App\Http\Controllers\MuslimController;

// Home route
Route::get('/', [HomeController::class, 'home']);

// Authentication routes
Auth::routes();

// Redirect after login
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

// Registration route
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Welcome route
Route::get('/home', function () {
    return view('home'); // Ensure you have resources/views/welcome.blade.php
})->name('home');

// school routes
Route::get('/schools/{religion}', [SchoolController::class, 'showByReligion']);

// school directory route
Route::get('/muslim-schools', [SchoolController::class, 'muslim'])->name('muslim-schools');
Route::get('/christian-schools', [SchoolController::class, 'christian'])->name('christian-schools');


// Registration routes
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
