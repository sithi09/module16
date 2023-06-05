<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;


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

Route::get('/hello',[ApiController::class,'hello']);
Route::post('/doctor/create',[ApiController::class,'create']);
Route::get('/doctor/list',[ApiController::class,'list']);
Route::post('/login',[ApiController::class,'login']);
Route::any('/logout',[ApiController::class,'logout']);
Route::get('/doctor/{id}',[ApiController::class,'showbyid']);
Route::post('/doctorupdate/{id}',[ApiController::class,'updatebyid']);
Route::post('/doctordelete/{id}',[ApiController::class,'deletebyid']);