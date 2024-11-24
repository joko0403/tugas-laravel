<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\StudentController;

Route::get('/siswa', function () {
    return view('siswa');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/absensi', function () {
    return view('absensi');
});

Route::get('/laporan', function () {
    return view('laporan');
});

Route::get('/manajemen-akun', function () {
    return view('manajemen-akun');
});
// Route Siswa
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

// Route Absensi
Route::get('/absensi/kelas/{kelas}', [AbsensiController::class, 'showAbsensiKelas'])->name('absensi-kelas-pagi');
Route::post('/absensi', [AbsensiController::class, 'store'])->name('absensi-pagi');
