<?php

use App\Http\Controllers\backend\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template.master');
});

Route::resource('/user', UserController::class);
