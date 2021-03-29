<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\RegisterController;

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

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

// Route::post('login-admin', [LoginAdminController::class, 'login']);
Route::middleware('auth:api')->group( function () {

    Route::post('logout', [RegisterController::class, 'logout']);
    Route::get('user', [RegisterController::class, 'user']);
    // ini nanti untuk admin
});


