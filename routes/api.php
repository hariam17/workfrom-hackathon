<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// ROUTING API OFFICES
Route::get('/offices', [App\Http\Controllers\OfficeController::class, 'index']);
Route::post('/addOffice', [App\Http\Controllers\OfficeController::class, 'store']);
Route::get('/office/{id}', [App\Http\Controllers\OfficeController::class, 'show']);
Route::put('/office/edit/{id}', [App\Http\Controllers\OfficeController::class, 'update']);
Route::delete('/office/delete/{id}', [App\Http\Controllers\OfficeController::class, 'destroy']);

// ROUTING API ROOMS
Route::get('/rooms', [App\Http\Controllers\RoomController::class, 'index']);
Route::post('/addRoom', [App\Http\Controllers\RoomController::class, 'store']);
Route::get('/room/{id}', [App\Http\Controllers\RoomController::class, 'show']);
Route::put('/room/edit/{id}', [App\Http\Controllers\RoomController::class, 'update']);
Route::delete('/room/delete/{id}', [App\Http\Controllers\RoomController::class, 'destroy']);