<?php

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

Route::get('/Vistas/Inicio', function () {
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



// RUTAS DE LAS PÁGINAS DEL CLIENTE (no debería tener cuenta)

Route::get('/', function () {
    return view('/pagClients/Inicio');
});

Route::get('/Servicios', function () {
    return view('/pagClients/Servicios');
});

Route::get('/Tienda', function () {
    return view('/pagClients/Tienda');
});

Route::get('/AcercaDeNosotros', function () {
    return view('/pagClients/AcercaDeNosotros');
});




// INICIO DE SESION, REGISTRO Y ROLES DE USUARIO HECHOS EN LARAVEL BREEZE
// ADMIN
Route::get('index', function () {
    return view('admin.index');
})->middleware(['auth', 'verified','role:admin'])->name('admin.index');


Route::get('/admin/Inicio', function () {
    return view('admin.Inicio');
})->middleware(['auth', 'verified','role:admin'])->name('admin.Inicio');

// Route::get('/admin/Servicios', function () {
//     return view('admin.Servicios');
// })->middleware(['auth', 'verified','role:admin'])->name('admin.servicios');









Route::get('/admin/Servicios', [ProductController::class, 'index'])
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('admin.Servicios.index');










Route::get('/admin/Tienda', function () {
    return view('admin.Tienda');
})->middleware(['auth', 'verified','role:admin'])->name('admin.tienda');

Route::get('/admin/AcercaDeNosotros', function () {
    return view('admin.AcercaDeNosotros');
})->middleware(['auth', 'verified','role:admin'])->name('admin.acercadenosotros');

Route::get('/admin/CostosFijos', function () {
    return view('admin.CostosFijos');
})->middleware(['auth', 'verified','role:admin'])->name('admin.CostosFijos');

// Route::get('/admin/Servicios/create', function () {
//     return view('admin.Servicios.create');
// }, [ProductController::class,'create'])->middleware(['auth', 'verified','rolegit push REMOTE-NAME LOCAL-BRANCH-NAME:REMOTE-BRANCH-NAME:admin'])->name('admin.Servicios.create');

Route::get('/admin/Servicios/create', [ProductController::class, 'create'])
    ->middleware(['auth', 'verified','role:admin'])
    ->name('admin.Servicios.create');

// Route::post('/admin/Servicios', [ProductController::class,'store'])->middleware(['auth', 'verified','role:admin'])->name('admin.Servicios.store');

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

// Route::post('/admin/Servicios', function () {
//     return view('admin.Servicios.create');
// }, [ProductController::class,'index'])->middleware(['auth', 'verified','role:admin'])->name('admin.Servicios.index');

// Route::post('/admin/Servicios', function () {
//     return view('admin.Servicios.create');
// }, [ProductController::class,'store'])->middleware(['auth', 'verified','role:admin'])->name('admin.Servicios.store');


// AUTENTICACIÓN
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
