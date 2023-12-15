<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login\LoginController;
use \App\Http\Controllers\Register\RegisterController;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::prefix('v1')->group(function (){
    Route::post('login', [LoginController::class, 'Login'])->name('login');
    Route::post('registro', [RegisterController::class, 'Register']);
});
