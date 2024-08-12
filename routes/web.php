<?php

use App\Http\Controllers\CostController;
use App\Http\Controllers\HerramientaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

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

/* CRUDS */

Route::get('/Vistas/Informes', [ProductController::class, 'index'])
->name('Vistas.index');

Route::get('/Vistas/Herramientas', [HerramientaController::class, 'index'])
->middleware(['auth', 'verified', 'role:employee'])
->name('Herramientas.index');

Route::get('/admin/costs', [CostController::class, 'index'])
->middleware(['auth', 'verified', 'role:admin'])
->name('admin.costs.index');





/* SERVICIOS CONTROLADOR */

    Route::get('/admin/Servicios/create', [ProductController::class, 'create'])
    ->middleware(['auth', 'verified','role:admin'])
    ->name('admin.Servicios.create');

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

    Route::get('/admin/costs/create', [CostController::class, 'create'])
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('admin.costs.create');


    Route::post('/admin/costs', [CostController::class, 'store'])
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('admin.costs.store');

Route::get('pdf_generator', [CostController::class, 'pdf_generator_get'])
->middleware(['auth', 'verified', 'role:admin'])
->name('admin.costs.pdf_generator_get');

Route::get('/admin/costs/create', [CostController::class, 'create'])
->middleware(['auth', 'verified', 'role:admin'])
->name('admin.costs.create');

    Route::get('/admin/costs/{cost}/edit', [CostController::class, 'edit'])
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('admin.costs.edit');

    Route::put('/admin/costs/{cost}', [CostController::class, 'update'])
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('admin.costs.update');

    Route::delete('/admin/costs/{cost}', [CostController::class, 'destroy'])
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('admin.costs.destroy');

    //Proveedores

    Route::get('/admin/stores', [StoreController::class, 'index'])
->middleware(['auth', 'verified', 'role:admin'])
->name('admin.stores.index');

    Route::get('/admin/stores/create', [StoreController::class, 'create'])
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('admin.stores.create');

    Route::get('pdf_generatore', [StoreController::class, 'pdf_generator_get'])
->middleware(['auth', 'verified', 'role:admin'])
->name('admin.stores.pdf_generator_get');

    Route::post('/admin/stores', [StoreController::class, 'store'])
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('admin.stores.store');

    Route::get('/admin/stores/{store}/edit', [StoreController::class, 'edit'])
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('admin.stores.edit');

    Route::put('/admin/stores/{store}', [StoreController::class, 'update'])
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('admin.stores.update');

    Route::delete('/admin/stores/{cost}', [StoreController::class, 'destroy'])
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('admin.stores.destroy');
// HERRAMIENTAS

    Route::get('/admin/Herramientas/create', [HerramientaController::class, 'create'])
    ->middleware(['auth', 'verified', 'role:employee'])
    ->name('admin.Herramientas.create');

    Route::post('/admin/Herramientas', [HerramientaController::class, 'store'])
    ->middleware(['auth', 'verified', 'role:employee'])
    ->name('admin.Herramientas.store');

    Route::get('/admin/Herramientas/{herramienta}/edit', [HerramientaController::class, 'edit'])
    ->middleware(['auth', 'verified', 'role:employee'])
    ->name('admin.Herramientas.edit');

    Route::put('/admin/Herramientas/{herramienta}', [HerramientaController::class, 'update'])
    ->middleware(['auth', 'verified', 'role:employee'])
    ->name('admin.Herramientas.update');

    Route::delete('/admin/Herramientas/{herramienta}', [HerramientaController::class, 'destroy'])
    ->middleware(['auth', 'verified', 'role:employee'])
    ->name('admin.Herramientas.destroy');


// AUTENTICACIÓN
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

