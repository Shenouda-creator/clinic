<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::view('major', 'web.site.pages.major');
Route::view('home', 'web.site.pages.home');
Route::view('history', 'web.site.pages.history');
Route::view('login', 'web.site.pages.login');
Route::view('register', 'web.site.pages.register');
Route::view('doctor', 'web.site.pages.doctors.index');
Route::view('doctor-book', 'web.site.pages.doctors.doctor');
