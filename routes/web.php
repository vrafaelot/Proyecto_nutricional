<?php

use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/weight-lose', function () {
    return view('weight-lose');
});

Route::get('/cuestionario', function () {
    return view('cuestionario');
});

Route::get('/quest', function () {
    return view('quest');
});


Route::get('/contacto', [ContactController::class, 'index'])->name('contacto.index');
Route::get('/contacto/create', [ContactController::class, 'create'])->name('contacto.create');
Route::post('/contacto', [ContactController::class, 'store'])->name('contacto.store');

Route::get('/nosotros', function () {
    return view('nosotros');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware('role:admin')->group(function () {
        Route::get('/admin', function () {
            return view('admin.index');
        })->name('admin.index');
    });
});