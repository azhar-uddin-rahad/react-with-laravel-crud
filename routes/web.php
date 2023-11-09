<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\SingleActionControllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/basicController',[LearnController::class,'index']);
//alternative away to dealer routing 
//Route::get('/home','App\Http\Controllers\LearnController@detail');
Route::get('/del',[LearnController::class,'detail']);
Route::get('/signlecontroller',SingleActionControllers::class);
