<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TurnoController;
/*
Route::get('/', function () {
    return view('welcome');
});

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::view('/','turno.inicio')->name('turno.inicio');
Route::view('url','vista)->name('turno.consulta');

Route::get('turno/consulta',[TurnoController::class, 'consulta'])->name('turno.consulta');
Route::view('turno/consulta','turno.consulta')->name('turno.consulta');
*/

Route::get('/', [TurnoController::class, 'index'])->name('turno.inicio');
Route::get('turno/consulta',[TurnoController::class, 'consulta'])->name('turno.consulta');

Route::post('turno/inicio', [TurnoController::class, 'store'])->name('turno.store');
//Route::post('doc/crear', [TurnoController::class, 'store'])->name('doc.store');

Route::view('turno/prueba','turno.prueba')->name('turno.prueba');


Route::view('turno/prueba2','turno.prueba2')->name('turno.prueba2');