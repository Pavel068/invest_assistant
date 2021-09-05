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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('actives', [\App\Http\Controllers\api\v1\ActivesController::class, 'getActives']);
Route::get('actives/user/{user_id}', [\App\Http\Controllers\api\v1\ActivesController::class, 'getUserActives']);
