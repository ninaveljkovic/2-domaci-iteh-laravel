<?php

use App\Http\Controllers\FrizerController;
use App\Http\Controllers\FrizuraController;
use App\Http\Controllers\TerminController;
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

Route::get("/frizeri",[FrizerController::class,'index']);
Route::get("/frizeri/{id}",[FrizerController::class,'show']);


Route::get("/frizure",[FrizuraController::class,'index']);
Route::get("/frizure/{id}",[FrizuraController::class,'show']);


Route::get("/termini",[TerminController::class,'index']);
Route::get("/termini/{id}",[TerminController::class,'show']);
Route::post("/termini",[TerminController::class,'store']);
Route::put("/termini/{id}",[TerminController::class,'update']);
Route::delete("/termini/{id}",[TerminController::class,'destroy']);





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
