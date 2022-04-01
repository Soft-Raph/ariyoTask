<?php

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


//Corp members registering and logging in
Auth::routes();

// corp member use this to register citizens with their ward,LGA,State and gender
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Show report of the number of citizens in the country,state,LGA and ward
Route::get('/', [App\Http\Controllers\HomeController::class, 'show']);

//Sending request after filling the citizen registration form
Route::post('/register/citizen', [App\Http\Controllers\HomeController::class, 'store'])->name('register.citizen');

