<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use App\Models\Siswa;

Route::get('/', function () {
    return view('data_siswa', ['data_siswa' => Siswa::orderBy('created_at', 'desc')->get()]);
});

Route::post('/tambah_siswa', [SiswaController::class,'store']);
Route::put('/edit_siswa/{id}', [SiswaController::class,'update']);

Route::delete('/siswa/{id}', [SiswaController::class, 'delete']);
Route::get('/search', [SiswaController::class, 'search']);


