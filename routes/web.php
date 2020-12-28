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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/dashboard/about', function () {
    return view('admin.view-about');
})->name('view-about');

Route::get('/dashboard/edit-about', function () {
    return view('admin.edit-about');
})->name('edit-about');

Route::get('/dashboard/blood-tips', function () {
    return view('admin.view-blood-tips');
})->name('view-blood-tips');

Route::get('/dashboard/edit-blood-tips', function () {
    return view('admin.edit-blood-tips');
})->name('edit-blood-tips');

Route::get('/dashboard/upcoming-events', function () {
    return view('admin.view-upcoming-events');
})->name('view-upcoming-events');

Route::get('/dashboard/add-upcoming-events', function () {
    return view('admin.add-upcoming-events');
})->name('add-upcoming-event');

Route::get('/dashboard/edit-upcoming-events', function () {
    return view('admin.edit-upcoming-events');
})->name('edit-upcoming-event');

Route::get('/dashboard/blood-groups', function () {
    return view('admin.view-blood-groups');
})->name('view-blood-groups');

Route::get('/dashboard/donors', function () {
    return view('admin.view-donors');
})->name('view-donors');

Route::get('/dashboard/recipients', function () {
    return view('admin.view-recipients');
})->name('view-recipients');

Route::get('/user/donor', function () {
    return view('user.donor-dashboard');
})->name('donor-dashboard');

Route::get('/user/recipient', function () {
    return view('user.recipient-dashboard');
})->name('recipient-dashboard');
