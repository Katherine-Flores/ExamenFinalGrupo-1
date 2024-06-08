<?php

use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/alumnos', [AlumnoController::class, '__invoke'])->name('alumno.invoke'); // Vista de todos los registros de la tabla alumno
Route::get('/alumno', [AlumnoController::class, 'index'])->name('alumno'); // Vista del filtrado de alumnos
Route::post('/regitro-alumno', [AlumnoController::class, 'create'])->name('alumno.create'); // Lógica para almacenar un nuevo registro
Route::put('/modificar-alumno/{id}', [AlumnoController::class, 'update'])->name('alumno.update'); // Lógica para modificar un registro existente
Route::delete('/eliminar-alumno/{id}', [AlumnoController::class, 'delete'])->name('alumno.delete'); // Lógica para eliminar un registro existente
