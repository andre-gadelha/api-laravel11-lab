<?php

use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AtividadeController;
use Illuminate\Support\Facades\Route;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/teste', function () {
    return ['aqui'];
    //return \App\Models\User::all();
});


Route::get('/atividades', [AtividadeController::class, 'index']);
Route::get('/atividade/{id}', [AtividadeController::class, 'show']);
Route::post('/atividade', [AtividadeController::class, 'store']);
Route::put('/atividade/{id}', [AtividadeController::class, 'update']);
Route::delete('/atividade/{id}', [AtividadeController::class, 'destroy']);

