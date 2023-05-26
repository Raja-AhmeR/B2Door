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
    return view('index');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/orders', function () {
    return view('orders');
});

Route::get('/register-distributor', function () {
    return view('register-distributor');
});

Route::get('/view-distributor', function () {
    return view('view-distributor');
});

Route::get('/design', function () {
    return view('design');
});

Route::get('/print', function () {
    return view('print');
});

Route::get('/tracking', function () {
    return view('tracking');
});

Route::get('/view-vehicle', function () {
    return view('view-vehicle');
});

Route::get('/register-vehicle', function () {
    return view('register-vehicle');
});

Route::get('/analytics', function () {
    return view('analytics');
});

Route::get('/new-orders', function () {
    return view('new-orders');
});

Route::get('/completed-orders', function () {
    return view('completed-orders');
});

Route::get('/users-profile', function () {
    return view('users-profile');
});
