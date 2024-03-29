<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\LoginController;
use App\Http\Controllers\API\RetailerController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', [LoginController::class, 'login']);

Route::middleware('auth:api')->group( function () {
    Route::get('list', [RetailerController::class, 'index']);
    Route::post('logout', [LoginController::class, 'logout']);
    Route::get('random-numbers', [RetailerController::class, 'randomNumbers']);
});

Route::get('/show', [App\Http\Controllers\IndexController::class, 'show'])->name('home');