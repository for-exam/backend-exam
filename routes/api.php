<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDetailsController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/create-user', [UserDetailsController::class, 'store']);
Route::get('/users', [UserDetailsController::class, 'index']);
Route::delete('/remove-user/{id}', [UserDetailsController::class, 'destroy']);
Route::put('/update-user/{id}', [UserDetailsController::class, 'update']);
