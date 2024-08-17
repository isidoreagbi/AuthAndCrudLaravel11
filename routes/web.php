<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::resources('permissions,' App\Http\Controllers\PermissionController::class);
