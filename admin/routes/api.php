<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AuthController;
  
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
  
// Route::get('register', [passportAuthController::class, 'registerUserExample']);
// Route::middleware('auth:api')->group( function () {
//     Route::resource('products', passportAuthController::class);
// });


Route::post('mobile-verification', [AuthController::class,'mobile_verification']);
Route::post('otp-verification', [AuthController::class,'otp_verification']);

Route::middleware('auth:api')->group(function () {
    // our routes to be protected will go in here
    // Route::post('update_profile_name', [UserController::class,'update_profile_name']);
});

