<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class, 'index']);
Route::get('create', [ContactController::class, 'create']);
Route::post('store', [ContactController::class, 'store']);
Route::get('destroy/{id}', [ContactController::class, 'destroy']);
Route::get('edit/{id}', [ContactController::class, 'edit']);
Route::post('update', [ContactController::class, 'update']);

