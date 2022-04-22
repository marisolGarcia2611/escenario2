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
Route::get('/citas', [App\Http\Controllers\CitasController::class, 'citas'])->name('citas');  
Route::get('/ControlCitas', [App\Http\Controllers\CitasController::class, 'controlcitas'])->name('ControlCitas');  
Route::get('/ControlUsuarios', [App\Http\Controllers\VistasController::class, 'controlusuarios'])->name('ControlUsuarios');  
Route::get('2fa', [App\Http\Controllers\TwoFAController::class, 'index'])->name('2fa.index');
Route::post('2fa', [App\Http\Controllers\TwoFAController::class, 'store'])->name('2fa.post');
Route::get('2fa/reset', [App\Http\Controllers\TwoFAController::class, 'resend'])->name('2fa.resend');
Route::post('/store',[App\Http\Controllers\CitasController::class, 'store'])->name('citas.store'); 
Route::get('/showUser/{id}', [App\Http\Controllers\VistasController::class, 'showUser'])->name('showUser');  
Route::delete('/destroyUser/{id}', [App\Http\Controllers\VistasController::class, 'destroyUser'])->name('destroyUser');  
Route::get('/editUser/{id}', [App\Http\Controllers\VistasController::class, 'editUser'])->name('editUser');  
Route::put('/update/{id}', [App\Http\Controllers\VistasController::class, 'update'])->name('update');  

//Route::get('/download', 'ResgisterController@traemelo')->name('download');