<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
route::get("/", function () {
    return view("welcome");
});
// Route for viewing the signup form
Route::view('/signup', 'pages.signup')->name('signup.form');
Route::post('/signup',[AuthController::class,'signup'])->name('signup.submit');

// Route for viewing the login form
Route::view('/login', 'pages.login')->name('login.form');
Route::post('/login',[AuthController::class,'login'])->name('login.submit');

// Route for viewing Reports
Route::view('/allreports', 'reports.allreports')->name('allreports');

//Route for viewing GenerateReport
Route::view('/generatereport', 'reports.generatereport')->name('generatereport');