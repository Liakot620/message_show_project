<?php

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;




//public function

Route::middleware('auth:sanctum')->get('/user', function(request $request){
 return $request->User();
});
Route::post('/register',[UserController::class,'register']);

