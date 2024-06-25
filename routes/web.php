<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrganizacionController;
use App\Http\Controllers\DocumentosController;
use App\Http\Controllers\ObjetivosController;
use App\Http\Controllers\RiesgosController;
use App\Http\Controllers\IndicadoresController;
use App\Http\Controllers\EquipamientosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [WelcomeController::class, 'index'])->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::prefix('Organizacion')->group(function () {
    Route::get('/gestion-de-normas', [OrganizacionController::class, 'gestionDeNormas'])->name('organizacion.gestion-de-normas');
    Route::get('/estructura-organizacion', [OrganizacionController::class, 'estructuraOrganizacion'])->name('organizacion.estructura-organizacion');
});


// Route::prefix('Riesgos')->group(function () {
//     Route::get('/evaluacion-de-riesgos', [RiesgosController::class, 'evaluacionDeRiesgos'])->name('riesgos.evaluacion-de-riesgos');
//     Route::get('/planes-de-tratamiento', [RiesgosController::class, 'planesDeTratamiento'])->name('riesgos.planes-de-tratamiento');
//     Route::get('/planes-seguimiento', [RiesgosController::class, 'planesDeSeguimiento'])->name('riesgos.planes-seguimiento');
//     Route::get('/biblioteca-de-controles', [RiesgosController::class, 'bibliotecaDeControles'])->name('riesgos.biblioteca-de-controles');
//     Route::get('/metodologia-de-evaluacion', [RiesgosController::class, 'metodologiaDeEvaluacion'])->name('riesgos.metodologia-de-evaluacion');
//     Route::get('/gestion-de-oportunidades', [RiesgosController::class, 'gestionDeOportunidades'])->name('riesgos.gestion-de-oportunidades');
//     Route::get('/configuracion-de-riesgos', [RiesgosController::class, 'configuracionDeRiesgos'])->name('riesgos.configuracion-de-riesgos');
//     Route::get('/mis-riesgos', [RiesgosController::class, 'misRiesgos'])->name('riesgos.mis-riesgos');
//     Route::get('/riesgos-propuestos', [RiesgosController::class, 'riesgosPropuestos'])->name('riesgos.riesgos-propuestos');
//     Route::get('/riiesgos', [RiesgosController::class, 'index'])->name('riesgos.index');
// });



Route::prefix('Equipamientos')->group(function () {
    Route::get('/', [EquipamientosController::class, 'index'])->name('equipamientos.index');
});


Route::prefix('Home')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
    Route::get('/navigator', 'HomeController@navigator')->name('navigator');
});

Route::resource('riesgos', RiesgosController::class);
Route::get('/riegos', 'RiegoController@index')->name('riegos.index');
Route::get('/riegos', 'RiegoController@show')->name('riegos.show');

require __DIR__.'/auth.php';