<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('2fa');
Route::get('/citas', [App\Http\Controllers\VistasController::class, 'citas'])->name('citas');  
Route::get('/ControlCitas', [App\Http\Controllers\VistasController::class, 'controlcitas'])->name('ControlCitas');  
Route::get('/ControlUsuarios', [App\Http\Controllers\VistasController::class, 'controlusuarios'])->name('ControlUsuarios');  
Route::get('2fa', [App\Http\Controllers\TwoFAController::class, 'index'])->name('2fa.index');
Route::post('2fa', [App\Http\Controllers\TwoFAController::class, 'store'])->name('2fa.post');
Route::get('2fa/reset', [App\Http\Controllers\TwoFAController::class, 'resend'])->name('2fa.resend');
//Route::get('/download', 'ResgisterController@traemelo')->name('download');