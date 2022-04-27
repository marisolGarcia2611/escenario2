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
Route::get('22fa', [App\Http\Controllers\SegundoMetodoController::class, 'index'])->name('segundo');
Route::get('22fa', [App\Http\Controllers\SegundoMetodoController::class, 'store'])->name('fa.post');
Route::get('22fa/reset', [App\Http\Controllers\SegundoMetodoController::class, 'resend'])->name('fa.resend');
Route::post('/store',[App\Http\Controllers\CitasController::class, 'store'])->name('citas.store'); 
Route::get('/showUser/{id}', [App\Http\Controllers\VistasController::class, 'showUser'])->name('showUser');  
Route::delete('/destroyUser/{id}', [App\Http\Controllers\VistasController::class, 'destroyUser'])->name('destroyUser');  
Route::get('/editUser/{id}', [App\Http\Controllers\VistasController::class, 'editUser'])->name('editUser');  
Route::put('/update/{id}', [App\Http\Controllers\VistasController::class, 'update'])->name('update');  
Route::get('/token', [App\Http\Controllers\TokenVController::class, 'index'])->name('token');
Route::get('/tokenV', [App\Http\Controllers\TokenVController::class, 'index'])->name('tokenV');
Route::get('/permission', [App\Http\Controllers\PermissionController::class, 'index'])->name('danger');
Route::delete('/deletec/{id}', [App\Http\Controllers\CitasController::class, 'destroy'])->name('eliminarc');
Route::get('/validacion', [App\Http\Controllers\CitasController::class, 'index'])->name('validacion');
Route::post('/eliminarcita)', [App\Http\Controllers\TokenVController::class, 'deletecitaT'])->name('validatetoken');

//Route::get('/download', 'ResgisterController@traemelo')->name('download');