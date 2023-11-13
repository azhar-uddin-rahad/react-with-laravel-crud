<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post\UserPostController;

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
Route::post('/createpost',[UserPostController::class,'create']);
Route::get('/student',[UserPostController::class,'index']);
Route::get('/student/{id}',[UserPostController::class,'show']);
Route::get('/student/{id}/edit',[UserPostController::class,'edit']);
Route::put('/student/{id}/edit',[UserPostController::class,'update']);
Route::delete('/student/{id}/remove',[UserPostController::class,'remove']);