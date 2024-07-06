<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TodoController::class, 'index']);
Route::get('/details/{id}', [TodoController::class, 'details']);
Route::get('/create', [TodoController::class, 'create']);
Route::get('/edit/{id}', [TodoController::class, 'edit']);
Route::get('/delete/{id}', [TodoController::class, 'delete']);
Route::post('/store', [TodoController::class, 'store']);
Route::post('/update/{id}', [TodoController::class, 'updateTodo']);
