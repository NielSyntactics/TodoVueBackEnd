<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::resource('todo',App\Http\Controllers\TodoController::class);

Route::post('/users/register',[App\Http\Controllers\API\RegisterController::class, 'register'])->name('user.register');
Route::post('/users/login',[App\Http\Controllers\API\LoginController::class, 'login'])->name('user.login');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/users',function (Request $request) {
        return $request->user();
    });

    Route::resource('todo',App\Http\Controllers\TodoController::class);
    Route::put('/users/logout',[App\Http\Controllers\API\LogoutController::class ,'logout'])->name('user.logout');
});
