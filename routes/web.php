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

Route::get('/distribution', function () {
    return view('distribution');
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

Route::get('/vehicle-media', function () {
    return view('vehicle-media');
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

Route::get('/pending-orders', function () {
    return view('pending-orders');
});

Route::get('/completed-orders', function () {
    return view('completed-orders');
});
