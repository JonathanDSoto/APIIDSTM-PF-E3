<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\DifficultyController;
use App\Http\Controllers\Api\NonogramController;
use App\Http\Controllers\Api\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('nonograms', NonogramController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('tags', TagController::class);
Route::apiResource('difficulties', DifficultyController::class);