<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
});



// RUTAS DE LAS PÁGINAS DEL ADMIN (solo puede entrar un usuario tipo administrador)

/* Route::get('/admin/inicio', function () {
    return view('/admin/Inicio');
});

Route::get('/admin/Servicios', function () {
    return view('/admin/Servicios');
});

Route::get('/admin/Tienda', function () {
    return view('/admin/Tienda');
});

Route::get('/admin/AcercaDeNosotros', function () {
    return view('/admin/AcercaDeNosotros');
});
 */


// RUTAS DE LAS PÁGINAS DE LOS EMPLEADOS (solo puede entrar los usuarios de tipo empleado)

/* Route::get('/pagEmpleados/inicio', function () {
    return view('/pagEmpleados/Inicio');
});

Route::get('/pagEmpleados/Servicios', function () {
    return view('/pagEmpleados/Servicios');
});

Route::get('/pagEmpleados/Tienda', function () {
    return view('/pagEmpleados/Tienda');
});

Route::get('/pagEmpleados/AcercaDeNosotros', function () {
    return view('/pagEmpleados/AcercaDeNosotros');
});
 */



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

// EMPLEADO
Route::get('/pagEmpleados/Inicio', function () {
    return view('pagEmpleados.Inicio');
})->middleware(['auth', 'verified','role:employee'])->name('pagEmpleados.inicio');

Route::get('/pagEmpleados/Servicios', function () {
    return view('pagEmpleados.Servicios');
})->middleware(['auth', 'verified','role:employee'])->name('pagEmpleados.Servicios');


Route::get('/pagEmpleados/Tienda', function () {
    return view('pagEmpleados.Tienda');
})->middleware(['auth', 'verified','role:employee'])->name('pagEmpleados.Tienda');


Route::get('/pagEmpleados/AcercaDeNosotros', function () {
    return view('pagEmpleados.AcercaDeNosotros');
})->middleware(['auth', 'verified','role:employee'])->name('pagEmpleados.AcercaDeNosotros');




// ADMIN
Route::get('/admin/Inicio', function () {
    return view('admin.Inicio');
})->middleware(['auth', 'verified','role:admin'])->name('admin.inicio');

Route::get('/admin/Servicios', function () {
    return view('admin.Servicios');
})->middleware(['auth', 'verified','role:admin'])->name('admin.servicios');

Route::get('/admin/Tienda', function () {
    return view('admin.Tienda');
})->middleware(['auth', 'verified','role:admin'])->name('admin.tienda');

Route::get('/admin/AcercaDeNosotros', function () {
    return view('admin.AcercaDeNosotros');
})->middleware(['auth', 'verified','role:admin'])->name('admin.acercadenosotros');



// AUTENTICACIÓN
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
