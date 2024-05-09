<?php

use App\Http\controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TasksController::class, 'index']);
Route::get('/create', [TasksController::class, 'create']);
Route::post('/save', [TasksController::class, 'save']);