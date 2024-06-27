<?php

use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\GejalaController;
use App\Http\Controllers\User\PenyakitController;
use App\Http\Controllers\User\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [UserController::class, 'store']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/user', [UserController::class, 'get']);
    Route::patch('/user', [UserController::class, 'update']);

    Route::get('/gejala', [GejalaController::class, 'get']);

    Route::post('/penyakit', [PenyakitController::class, 'diagnosa']);
    Route::get('/hasil', [PenyakitController::class, 'hasil']);

    Route::post('/logout', [AuthController::class, 'logout']);
});
