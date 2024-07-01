<?php

use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GejalaController;
use App\Http\Controllers\Admin\PenyakitController;
use App\Http\Controllers\Admin\RelasiController;
use App\Http\Controllers\Admin\ResultController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::group(['prefix' => 'gejala', 'as' => 'gejala.'], function () {
        Route::get('/', [GejalaController::class, 'index'])->name('index');
        Route::post('/', [GejalaController::class, 'store'])->name('store');
        Route::get('/{gejala:id}/edit', [GejalaController::class, 'edit'])->name('edit');
        Route::patch('/{gejala:id}/update', [GejalaController::class, 'update'])->name('update');
        Route::delete('/{gejala:id}/destroy', [GejalaController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'penyakit', 'as' => 'penyakit.'], function () {
        Route::get('/', [PenyakitController::class, 'index'])->name('index');
        Route::post('/', [PenyakitController::class, 'store'])->name('store');
        Route::get('/{penyakit:id}/edit', [PenyakitController::class, 'edit'])->name('edit');
        Route::patch('/{penyakit:id}/update', [PenyakitController::class, 'update'])->name('update');
        Route::delete('/{penyakit:id}/destroy', [PenyakitController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'relasi', 'as' => 'relasi.'], function () {
        Route::get('/', [RelasiController::class, 'index'])->name('index');
        Route::post('/', [RelasiController::class, 'store'])->name('store');
        Route::delete('/{relasi:id}/destroy', [RelasiController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'hasil', 'as' => 'hasil.'], function () {
        Route::get('/', [ResultController::class, 'index'])->name('index');
        Route::get('/{diagnosa:id}', [ResultController::class, 'show'])->name('show');
        Route::delete('/{diagnosa:id}/destroy', [ResultController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/{user:id}/edit', [UserController::class, 'edit'])->name('edit');
        Route::patch('/{user:id}/update', [UserController::class, 'update'])->name('update');
        Route::delete('/{user:id}/destroy', [UserController::class, 'destroy'])->name('destroy');
    });

    Route::get('/about', function () {
        return view('pages.about');
    })->name('about');

    Route::get('/profile', [AccountController::class, 'index'])->name('profile');
    Route::patch('/profile', [AccountController::class, 'update'])->name('profile.update');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
