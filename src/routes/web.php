<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/* Login e cadastro (Paginas Abertas) */

Route::get('/cadastro', function () {return view('LoginRegister.cadastro');});
Route::get('/login', function () {return view('LoginRegister.login');});

/* ------------------------ */


/* Formularios */
Route::post('login', [CustomAuthController::class, 'login'])->name('login');
Route::post('cadastro', [CustomAuthController::class, 'create'])->name('cadastro');
