<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\ApiTokenAuth;

Route::middleware([ApiTokenAuth::class])->group(function() {
    Route::get('users/', [UserController::class, 'listAllAction']);
    Route::post('users/new', [UserController::class, 'newUsersAction']);
    Route::get('users/{id}', [UserController::class, 'getByIdAction']);
    Route::put('users/{id}', [UserController::class, 'updateAction']);
    Route::delete('users/{id}', [UserController::class, 'deleteAction']);
});