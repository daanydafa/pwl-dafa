<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa.index');
});

Route::get('/mahasiswa', [MahasiswaController::class,'index']);
Route::post('/mahasiswa/add', [MahasiswaController::class,'store']);
