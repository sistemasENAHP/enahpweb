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
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ExcelController;
use App\Events\SoporteEvento;
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/fire', function () {

    // event(new SoporteEvento);
     SoporteEvento::dispatch();
    return 'fired';

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/users', UserController::class);
Route::resource('Soportes', SoporteController::class);
Route::get('/buscar',[SoporteController::class,'BuscadorSoporte']);
Route::get('/buscarUser',[SoporteController::class,'buscarUsers']);

// Route::get('/buscarUser',[SoporteController::class,'buscarUsers']);
Route::get('/EstatusSoporte', [SoporteController::class,'EstatusSoportes']);
Route::resource('Tecnico', TecnicoController::class);
Route::PUT('/Tecnico/{id}',[TecnicoController::class,'Actualizar'])->name('Tecnico.Actualizar');

Route::get('/Espera',[TecnicoController::class,'TecnicoEnEspera'])->name('Espera.TecnicoEnEspera');

Route::get('/Espera/{id}/edit',[TecnicoController::class,'TecnicoEsperarEditar'])->name('Espera.edit');

Route::PUT('/ActualizarEspera/{id}',[TecnicoController::class,'TecnicoActualizarEspera'])->name('ActualizarEspera.TecnicoActualizarEspera');

Route::get('/MostrarEspera/{id}',[TecnicoController::class,'MostrarEspera'])->name('Espera.MostrarEspera');

Route::PUT('/Espera/{id}',[TecnicoController::class,'MostrarActualizarEspera'])->name('Espera.MostrarActualizarEspera');





Route::get('/Reparacion',[TecnicoController::class,'TecnicoReparacion'])->name('Reparacion');
Route::get('/Reparacion/{id}/edit',[TecnicoController::class,'TecnicoReparacionEditar'])->name('Reparacion.edit');
Route::PUT('/ActualizarReparados/{id}',[TecnicoController::class,'TecnicoReparacionActualizar'])->name('ActualizarReparados.TecnicoReparacionActualizar');


Route::get('/Pendiente',[TecnicoController::class,'TecnicoPendiente'])->name('Pendiente');
Route::get('/Pendiente/{id}/edit',[TecnicoController::class,'TecnicoPendienteEditar'])->name('Pendiente.edit');
Route::PUT('/ActualizarPendiente/{id}',[TecnicoController::class,'TecnicoPendienteActualizar'])->name('ActualizarEquipos.TecnicoPendienteActualizar');


Route::get('/Terminado',[TecnicoController::class,'TecnicoTerminado'])->name('Terminado');
Route::get('/Terminado/{id}/edit',[TecnicoController::class,'TecnicoTerminadoEditar'])->name('Terminado.edit');
Route::PUT('/ActualizarTerminado/{id}',[TecnicoController::class,'TecnicoTerminadoActualizar'])->name('ActualizarEquipos.TecnicoTerminadoActualizar');



Route::resource('ListadoPunto', ListadoPuntoController::class);
Route::resource('ListadoEquipo', ListadoEquipoController::class);

Route::get('/ListadoEquipoCreatePB',[ListadoEquipoController::class,'CreatePB'])->name('ListadoEquipo.CreatePB');

Route::get('/ListadoEquipo/{id}/editPB',[ListadoEquipoController::class,'editPB'])->name('ListadoEquipo.editPB');

Route::get('/ListadoEquipoCreateP1',[ListadoEquipoController::class,'CreateP1'])->name('ListadoEquipo.CreateP1');

Route::get('/ListadoEquipo/{id}/editP1',[ListadoEquipoController::class,'editP1'])->name('ListadoEquipo.editP1');


Route::get('/ListadoEquipoCreateP2YP3',[ListadoEquipoController::class,'CreateP2YP3'])->name('ListadoEquipo.CreateP2YP3');

Route::get('/ListadoEquipo/{id}/editP2YP3',[ListadoEquipoController::class,'editP2YP3'])->name('ListadoEquipo.editP2YP3');

Route::get('/ListadoEquipos',[ListadoEquipoController::class,'depatamentoUser'])->name('ListadoEquipos.get');

Route::get('/ListadoFuncionario',[ListadoEquipoController::class,'ListadoFuncionarios'])->name('ListadoFuncionario.get');



Route::resource('ListadoPunto', ListadoPuntoController::class);

Route::get('/ListadoPuntoCreatePB',[ListadoPuntoController::class,'CreatePB'])->name('ListadoPunto.CreatePB');
Route::get('/ListadoPunto/{id}/editPB',[ListadoPuntoController::class,'editPB'])->name('ListadoPunto.editPB');

Route::get('/ListadoPuntoCreateP1',[ListadoPuntoController::class,'CreateP1'])->name('ListadoPunto.CreateP1');

Route::get('/ListadoPunto/{id}/editP1',[ListadoPuntoController::class,'editP1'])->name('ListadoPunto.editP1');

Route::get('/ListadoPuntoCreateP2YP3',[ListadoPuntoController::class,'CreateP2YP3'])->name('ListadoPunto.CreateP2YP3');

Route::get('/ListadoPunto/{id}/editP2YP3',[ListadoPuntoController::class,'editP2YP3'])->name('ListadoPunto.editP2YP3');

Route::get('/ListadoPuntos',[ListadoPuntoController::class,'depatamentoUser'])->name('ListadoPuntos.get');

Route::get('/ListadoFuncionario',[ListadoPuntoController::class,'ListadoFuncionarios'])->name('ListadoFuncionario.get');






Route::resource('ListadoIp', ListadoipController::class);

Route::get('/ListadoIpCreatePB',[ListadoipController::class,'CreatePB'])->name('ListadoIp.CreatePB');

Route::get('/ListadoIp/{id}/editPB',[ListadoipController::class,'editPB'])->name('ListadoIp.editPB');

Route::get('/ListadoIpCreateP1',[ListadoipController::class,'CreateP1'])->name('ListadoIp.CreateP1');

Route::get('/ListadoIp/{id}/editP1',[ListadoipController::class,'editP1'])->name('ListadoIp.editP1');


Route::get('/ListadoIpCreateP2YP3',[ListadoipController::class,'CreateP2YP3'])->name('ListadoIp.CreateP2YP3');

Route::get('/ListadoIp/{id}/editP2YP3',[ListadoipController::class,'editP2YP3'])->name('ListadoIp.editP2YP3');


Route::get('/ListadoIPS',[ListadoipController::class,'depatamentoUser'])->name('ListadoIp.get');

Route::get('/ListadoFuncionario',[ListadoipController::class,'ListadoFuncionarios'])->name('ListadoFuncionario.get');



Route::resource('/Planos',PlanosController::class);

Route::get('/Estadisticas',[EstadisticasController::class,'Highcharts']);

Route::get('/EstadisticasPDF',[PDFController::class,'EstadisticaPDF']);

Route::get('/EquiposTerminadoPDF/{id}',[PDFController::class,'ReporteEquiposTerminado'])->name('EquiposTerminadoPDF.ReporteEquiposTerminado');

Route::get('/ListadoEquiposPDF',[PDFController::class,'ListadoEquipo']);


Route::get('/ListadosEquiposExel',[ExcelController::class,'ListadoEquipoExcel']);

require __DIR__.'/auth.php';

