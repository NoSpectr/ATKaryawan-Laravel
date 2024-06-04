<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\karyawanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Route index
Route::get('/', function () {
    return view('index');
})->name('index');

// Route Dashboard
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

// Route Register 
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Route Login 
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Routes requiring authentication
Route::middleware('auth')->group(function () {
    // Route Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Route Count Dashboard
    Route::get('dashboard/data', 'DashboardController@getData')->name('dashboard.data');

    // Route Karyawan
    Route::get('admin/karyawan/karyawan', [karyawanController::class, 'index'])->name('karyawan');
    Route::get('/admin/karyawan-create', function () {
        return view('admin/karyawan/karyawan-create');
    })->name('karyawan-create');
    Route::post('/admin/karyawan-store', [karyawanController::class, 'store'])->name('karyawan.store');
    Route::get('/admin/karyawan-edit/{id}', [karyawanController::class, 'edit'])->name('karyawan-edit');
    Route::put('/admin/karyawan/update/{id}', [karyawanController::class, 'update'])->name('karyawan.update');
    Route::GET('/admin/karyawan-destroy/{id}', [karyawanController::class, 'destroy'])->name('karyawan-destroy');
    Route::get('/admin/karyawan-pdf', [karyawanController::class, 'exportpdf'])->name('exportpdf');
});
Route::get('/logout', function () {
    session()->forget('username');
    return redirect()->route('login');
})->name('logout');