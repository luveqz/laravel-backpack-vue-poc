<?php

use App\Http\Controllers\API\v1\TaskController;
use Illuminate\Support\Facades\Route;



Route::apiResource('tasks', TaskController::class);

