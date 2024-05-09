<?php

use App\Http\controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::resources(['' => TasksController::class]);