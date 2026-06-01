<?php

use App\Http\Controllers\TaskController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.main');
});

Route::prefix('admin')->group(function () {
    Route::resource('/tasks',TaskController::class);
});
