<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user-profiles', [ProfileController::class, 'allUsers'] );

Route::get('/user/{id}/profile', [UserController::class, 'userProfile']);

Route::get('/user/{id}/courses', [UserController::class, 'allCourses']);