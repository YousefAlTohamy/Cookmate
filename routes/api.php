<?php

use App\Http\Controllers\Api\FavoriteController;
use App\Http\Controllers\Api\RecipeController;
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

Route::middleware('throttle:api')->group(function () {
    // recipes
    Route::get('/cookmates', [RecipeController::class, 'index']);
    Route::get('/cookmates/{recipe}', [RecipeController::class, 'show']);

    // favorites
    Route::get('/favorites/{deviceId}', [FavoriteController::class, 'index']);
    Route::post('/favorites', [FavoriteController::class, 'store']);

    // delete by device_id and recipe id (mobile friendly)
    Route::delete('/favorites/{deviceId}/{recipe}', [FavoriteController::class, 'destroy']);
});
