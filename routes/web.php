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
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/usecase', function () {
    return view('usecase');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/signup/customer', function () {
    return view('signup.customer');
});
Route::get('/signup/building_owner', function () {
    return view('signup.buildingowner');
});
