<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authmanager;
use Illuminate\Routing\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;


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




Route::get('/',[HomeController::class,'index']);

Route::get('/',[MessageController::class,'create']);
Route::post('/message',[MessageController::class,'message']);
