<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\DespesaRecorrenteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/* Login e cadastro (Paginas Abertas) */

Route::get('/cadastro', function () {return view('LoginRegister.cadastro');});
Route::get('/login', function () {return view('LoginRegister.login');});

/* ------------------------ */

/* Paginas de acesso logado */

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/despesas/fixas', function () { return view('DespesasFixas'); })->name('despesasFixas');
});

/* Formularios e Ações */
Route::post('login', [CustomAuthController::class, 'login'])->name('login');
Route::get('logout', [CustomAuthController::class, 'logout'])->name('logout');

Route::post('cadastro', [CustomAuthController::class, 'create'])->name('cadastro');

Route::post('/despesa', [DespesaRecorrenteController::class, 'create'])->name('despesa');

