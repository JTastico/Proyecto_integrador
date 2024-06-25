<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrganizacionController;
use App\Http\Controllers\RiesgosController; // Asegúrate de que sea el controlador correcto
use App\Http\Controllers\EquipamientosController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IndicadoresController;

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

Route::prefix('Equipamientos')->group(function () {
    Route::get('/', [EquipamientosController::class, 'index'])->name('equipamientos.index');
});

Route::resource('riesgos', RiesgosController::class); // Usa el controlador correcto
// Elimina rutas duplicadas o incorrectas



Route::get('/riegos', [RiesgosController::class, 'index'])->name('riegos.index');

Route::get('/indicadores', [IndicadoresController::class, 'index'])->name('indicadores.index');
Route::get('/indicadores/create', [IndicadoresController::class, 'create'])->name('indicadores.create');
Route::post('/indicadores', [IndicadoresController::class, 'store'])->name('indicadores.store');
Route::get('/indicadores/{id}/edit', [IndicadoresController::class, 'edit'])->name('indicadores.edit');
Route::put('/indicadores/{id}', [IndicadoresController::class, 'update'])->name('indicadores.update');

require __DIR__.'/auth.php';
