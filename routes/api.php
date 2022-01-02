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

Route::post('end-chat-single',[\App\Http\Controllers\Api\ChatController::class,'endChat'])->middleware('auth')->name('api.end-chat-single');
Route::post('set-wait-connect',[\App\Http\Controllers\Api\UserController::class,'setWaitConnect'])->middleware('auth')->name('api.set-wait-connect');
