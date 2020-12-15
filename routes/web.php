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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/upcoming-events', function () {
    return view('upcoming-events');
})->name('upcoming-events');

Route::get('/blood-tips', function () {
    return view('blood-tips');
})->name('blood-tips');

Route::get('/register-as-donor', function () {
    return view('donor-registration');
})->name('donor-registration');

Route::get('/register-as-recipient', function () {
    return view('recipient-registration');
})->name('recipient-registration');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/login', function () {
    return view('login');
})->name('login');
