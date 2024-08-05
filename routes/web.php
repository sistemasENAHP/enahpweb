<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SoporteController;
use App\Http\Controllers\TecnicoController;
use App\Http\Controllers\ListadoipController;
use App\Http\Controllers\ListadoPuntoController;
use App\Http\Controllers\ListadoEquipoController;
use App\Http\Controllers\PlanosController;
use App\Http\Controllers\EstadisticasController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('users', UserController::class);
Route::resource('Soportes', SoporteController::class);
Route::resource('Tecnico', TecnicoController::class);
Route::resource('ListadoIp', ListadoipController::class);
Route::resource('ListadoPunto', ListadoPuntoController::class);
Route::resource('ListadoEquipo', ListadoEquipoController::class);

Route::get('/ListadoEquipoCreatePB',[ListadoEquipoController::class,'CreatePB'])->name('ListadoEquipo.CreatePB');

Route::get('/ListadoEquipo/{id}/editPB',[ListadoEquipoController::class,'editPB'])->name('ListadoEquipo.editPB');

Route::get('/ListadoEquipoCreateP1',[ListadoEquipoController::class,'CreateP1'])->name('ListadoEquipo.CreateP1');

Route::get('/ListadoEquipo/{id}/editP1',[ListadoEquipoController::class,'editP1'])->name('ListadoEquipo.editP1');


Route::get('/ListadoEquipoCreateP2YP3',[ListadoEquipoController::class,'CreateP2YP3'])->name('ListadoEquipo.CreateP2YP3');

Route::get('/ListadoEquipo/{id}/editP2YP3',[ListadoEquipoController::class,'editP2YP3'])->name('ListadoEquipo.editP2YP3');



Route::get('/ListadoPuntoCreatePB',[ListadoPuntoController::class,'CreatePB'])->name('ListadoPunto.CreatePB');
Route::get('/ListadoPunto/{id}/editPB',[ListadoPuntoController::class,'editPB'])->name('ListadoPunto.editPB');

Route::get('/ListadoPuntoCreateP1',[ListadoPuntoController::class,'CreateP1'])->name('ListadoPunto.CreateP1');

Route::get('/ListadoPunto/{id}/editP1',[ListadoPuntoController::class,'editP1'])->name('ListadoPunto.editP1');

Route::get('/ListadoPuntoCreateP2YP3',[ListadoPuntoController::class,'CreateP2YP3'])->name('ListadoPunto.CreateP2YP3');

Route::get('/ListadoPunto/{id}/editP2YP3',[ListadoPuntoController::class,'editP2YP3'])->name('ListadoPunto.editP2YP3');




Route::get('/ListadoIpCreatePB',[ListadoipController::class,'CreatePB'])->name('ListadoIp.CreatePB');

Route::get('/ListadoIp/{id}/editPB',[ListadoipController::class,'editPB'])->name('ListadoIp.editPB');

Route::get('/ListadoIpCreateP1',[ListadoipController::class,'CreateP1'])->name('ListadoIp.CreateP1');

Route::get('/ListadoIp/{id}/editP1',[ListadoipController::class,'editP1'])->name('ListadoIp.editP1');


Route::get('/ListadoIpCreateP2YP3',[ListadoipController::class,'CreateP2YP3'])->name('ListadoIp.CreateP2YP3');

Route::get('/ListadoIp/{id}/editP2YP3',[ListadoipController::class,'editP2YP3'])->name('ListadoIp.editP2YP3');


Route::resource('/Planos',PlanosController::class);

Route::resource('/Estadisticas',EstadisticasController::class);

require __DIR__.'/auth.php';

