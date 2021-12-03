<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReservarController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\PagosController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CircularesController;
use App\Http\Controllers\ConocerController;
use App\Http\Controllers\ReleaseController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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


//los botones pricipales
Route::get('/',[ViewController::class, 'index'])->name('inicio.index');

Route::get('releases/{release}', [ReleaseController::class, 'show'])->name('inicio.show');

Route::get('pagos',[PagosController::class, 'index'])->name('inicio.pagos');

Route::get('galeria',[ViewController::class, 'gallery'])->name('inicio.galeria');

Route::get('contactanos',[ContactanosController::class, 'index'])->name('inicio.contactanos');

Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

Route::post('reservar', [ReservarController::class, 'store'])->name('reservar.store');

Route::get('reservar',[ReservarController::class, 'index'])->name('inicio.reservar');


//los botones del dropdown
Route::get('category/{category}', [ViewController::class, 'category'])->name('inicio.category'); 

Route::get('ciclo', [ConocerController::class, 'index'])->name('conocer.ciclo');

Route::get('licitacion', [ConocerController::class, 'licitacion'])->name('conocer.licitacion');

Route::get('manualc', [ConocerController::class, 'manualc'])->name('conocer.manualC');

Route::get('manualb', [ConocerController::class, 'manualb'])->name('conocer.manualB');

Route::get('lineas', [ConocerController::class, 'lineas'])->name('conocer.lineas');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

