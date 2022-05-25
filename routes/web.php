<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TipovehiculoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\VehiculoController;

Auth::routes();

// FRONTEND
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Route::group(['middleware' => ['auth']], function() {
	
	// PANEL DE CONTROL
	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
	
	//VEHICULOS
	Route::resource('tipovehiculos', TipovehiculoController::class);
	Route::resource('marcas', MarcaController::class);
	Route::resource('propietarios', PropietarioController::class);
	Route::resource('vehiculos', VehiculoController::class);
	Route::get('count', [VehiculoController::class, 'count'])->name('vehiculos.count');
	Route::get('editmarca/{id}', [VehiculoController::class, 'editmarca'])->name('vehiculos.editmarca');
});


