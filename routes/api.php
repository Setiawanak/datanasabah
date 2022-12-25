<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataApiController;


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

Route::get('/data', [DataApiController::class,'index']);
Route::post('/data', [DataApiController::class,'store']);
Route::get('/data/{id}',[DataApiController::class,'show']);
Route::put('/data/{id}',[DataApiController::class,'update']);
Route::delete('/data/{id}',[DataApiController::class,'destroy']);
