<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
});

Route::get('/index', [TaskController::class, 'index']);

Route::get('/tasks/{task}', [TaskController::class,'show']);