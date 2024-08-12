<?php

use App\Http\Controllers\CostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/profile/edit', function () {
    return view('edit');
});

// VISTAS

Route::get('/', function () {
    return view('Vistas.Inicio');
});

Route::get('/Vistas/Servicios', function () {
    return view('Vistas.Servicios');
});

Route::get('/Vistas/Tienda', function () {
    return view('Vistas.Tienda');
});

Route::get('/Vistas/AcercaDeNosotros', function () {
    return view('Vistas.AcercaDeNosotros');
});



Route::get('/Vistas/Informes', [ProductController::class, 'index'])
->middleware(['auth', 'verified', 'role:admin'])
->name('Vistas.index');
/*     
Route::get('/admin/costs', [CostController::class, 'index'])
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('admin.costs.index'); */

// INICIO DE SESION, REGISTRO Y ROLES DE USUARIO HECHOS EN LARAVEL BREEZE
// ADMIN

Route::get('/admin/Servicios/create', [ProductController::class, 'create'])
    ->middleware(['auth', 'verified','role:admin'])
    ->name('admin.Servicios.create');


/* SERVICIOS CONTROLADOR */


    Route::post('/admin/Servicios.store', [ProductController::class, 'store'])
    ->middleware(['auth', 'verified','role:admin'])
    ->name('admin.Servicios.store');

    Route::get('/admin/Servicios/{product}/edit', [ProductController::class, 'edit'])
    ->middleware(['auth', 'verified','role:admin'])
    ->name('admin.Servicios.edit');

    Route::put('/admin/Servicios/{product}', [ProductController::class, 'update'])
    ->middleware(['auth', 'verified','role:admin'])
    ->name('admin.Servicios.update');

    Route::delete('/admin/Servicios/{product}', [ProductController::class, 'destroy'])
    ->middleware(['auth', 'verified','role:admin'])
    ->name('admin.Servicios.destroy');

/* Costs */

Route::get('/admin/costs', [CostController::class, 'index'])
->middleware(['auth', 'verified', 'role:admin'])
->name('admin.costs.index');

Route::get('pdf_generator', [CostController::class, 'pdf_generator_get'])
->middleware(['auth', 'verified', 'role:admin'])
->name('admin.costs.pdf_generator_get');

Route::get('/admin/costs/create', [CostController::class, 'create'])
->middleware(['auth', 'verified', 'role:admin'])
->name('admin.costs.create');

Route::post('/admin/costs', [CostController::class, 'store'])
->middleware(['auth', 'verified', 'role:admin'])
->name('admin.costs.store');

Route::get('/admin/costs/{cost}/edit', [CostController::class, 'edit'])
->middleware(['auth', 'verified', 'role:admin'])
->name('admin.costs.edit');

Route::put('/admin/costs/{cost}', [CostController::class, 'update'])
->middleware(['auth', 'verified', 'role:admin'])
->name('admin.costs.update');

Route::delete('/admin/costs/{cost}', [CostController::class, 'destroy'])
->middleware(['auth', 'verified', 'role:admin'])
->name('admin.costs.destroy');

// AUTENTICACIÓN
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

