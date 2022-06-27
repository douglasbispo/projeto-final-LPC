<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    ImovelController,
};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ImovelController::class, 'index']);
Route::get('/imovel/{id}', [ImovelController::class, 'show']);
Route::get('/cadastrar', [ImovelController::class, 'create']);
Route::post('/imovel', [ImovelController::class, 'store']);
Route::get('/dashboard', [ImovelController::class, 'dashboard']);
Route::get('/editar/{id}', [ImovelController::class, 'edit']);
Route::put('/atualizar/{id}', [ImovelController::class, 'update']);
Route::delete('/apagar/{id}', [ImovelController::class, 'destroy']);
