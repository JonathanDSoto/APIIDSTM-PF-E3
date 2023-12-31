<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\DifficultyController;
use App\Http\Controllers\Api\NonogramController;
use App\Http\Controllers\Api\RatingController;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\UserController;
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
Route::post('/auth/issue-token', [AuthController::class, 'issue']);
Route::middleware('auth:sanctum')->post('/auth/destroy-token', [AuthController::class, 'logout']);

Route::apiResource('nonograms', NonogramController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('tags', TagController::class);
Route::apiResource('difficulties', DifficultyController::class);
Route::apiResource('users', UserController::class);
Route::middleware('auth:sanctum')->apiResource('ratings', RatingController::class);