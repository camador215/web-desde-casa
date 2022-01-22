<?php

use Illuminate\Support\Facades\Route; 
use App\Http\Livewire\SectorController;
use App\Http\Livewire\SolicitudTrabajoController;
use App\Http\Livewire\NoticiaController;
use App\Http\Livewire\MultaController;
use App\Http\Livewire\FeedbackController;
use App\Http\Livewire\EventoController;
use App\Http\Livewire\EquipoComunicacionController;
use App\Http\Livewire\BoletaPrestamoController;
use App\Http\Livewire\NoticiaMuralController;
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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/solicitud', SolicitudTrabajoController::class); 
    Route::get('/noticia', NoticiaController::class);     
    Route::get('/multa', MultaController::class);     
    Route::get('/feedback', FeedbackController::class);     
    Route::get('/evento', EventoController::class);     
    Route::get('/equipo', EquipoComunicacionController::class);     
    Route::get('/boleta', BoletaPrestamoController::class);     
    Route::get('/sector', SectorController::class);      
    Route::get('/noticia/mural', NoticiaMuralController::class); 
    

    // Route::get('/solicitud', SolicitudTrabajoController::class)->name(solicitud.index); 
    // Route::get('/noticia', NoticiaController::class)->name(noticia.index);     
    // Route::get('/multa', MultaController::class)->name(multa.index);     
    // Route::get('/feedback', FeedbackController::class)->name(feedback.index);     
    // Route::get('/evento', EventoController::class)->name(evento.index);     
    // Route::get('/equipo', EquipoComunicacionController::class)->name(equipo.index);     
    // Route::get('/boleta', BoletaPrestamoController::class)->name(boleta.index);     
    // Route::get('/sector', SectorController::class)->name(sector.index);   

    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');
    
});

