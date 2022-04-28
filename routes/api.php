<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/download',  [App\Http\Controllers\TwoFAController::class, 'traemelo'])->name('download');
Route::post('login2', [App\Http\Controllers\Auth\LoginController::class, 'login2']);
Route::post('/access/{token}', [App\Http\Controllers\Auth\LoginController::class, 'acceso'])->name('access');  