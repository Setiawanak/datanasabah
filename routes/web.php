<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/data', [DataController::class,'index']);
Route::get('/data/create', [DataController::class,'create']);
Route::post('/data', [DataController::class,'store']);
Route::get('/data/{id}/edit',[DataController::class,'edit']);
Route::put('/data/{id}',[DataController::class,'update']);
Route::delete('/data/{id}',[DataController::class,'destroy']);
