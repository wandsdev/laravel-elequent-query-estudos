<?php

use App\Http\Controllers\LancamentoController;
use App\Http\Controllers\TipoLancamentoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tipo-lancamento', [TipoLancamentoController::class, 'findAll']);
Route::get('/tipo-lancamento/{id}', [TipoLancamentoController::class, 'find']);

Route::get('/lancamento', [LancamentoController::class, 'findAll']);
