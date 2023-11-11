<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\API\Admin\UserController;


Route::post('login', [LoginController::class, 'login']);
Route::post('register', RegisterController::class);
Route::get('manage/user', [UserController::class, 'index']);

Route::group(['middleware' => 'api.auth'], function () {
    Route::get('user', [LoginController::class, 'details']);
    Route::get('logout', [LoginController::class, 'logout']);
});
