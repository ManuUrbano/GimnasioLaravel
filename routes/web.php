<?php

use App\Http\Controllers\ActividadController;
use App\Http\Controllers\ApiComida;
use App\Http\Controllers\TramoController;
use App\Http\Controllers\TramoUserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


//Ruta para ver la lista del CRUD Usuarios, llama  al metodo index de UserCotroller
Route::get('/usuarios/lista', [UserController::class,'index'])->middleware(['auth'])->name('user.index'); 

//Ruta que redirecciona a la vista config para modificar nuestro perfil.
Route::get('/configuracion', [UserController::class,'config'])->middleware(['auth'])->name('user.config'); 

//Ruta para ejecutar el metodoupdate del CRUD de users
Route::post('/user/update/{id}', [UserController::class,'update'])->middleware(['auth'])->name('user.update');

//Ruta para editar un usuario pasando su ID y ver sus datos
Route::get('/usuario/{id}/edit', [UserController::class,'edit'])->middleware(['auth'])->name('user.edit'); 

//Ruta para destruir/borrar un usuario
Route::get('/usuario/borrar/{id}', [UserController::class,'destroy'])->middleware(['auth'])->name('user.list');

//Ruta para crear un nuevo usuario NO FUNCIONA
Route::get('/usuario/crear', [UserController::class, 'create'])->middleware(['auth'])->name('user.create'); 

//Ruta para almacenar el usuario nuevo NO FUNCIONA
Route::get('/usuario/store', [UserController::class,'store'])->middleware(['auth'])->name('user.store'); 




//Ruta para ver la lista del CRUD Actividades, llama  al metodo index de ActividadController
Route::get('/actividades/lista', [ActividadController::class,'index'])->middleware(['auth'])->name('actividades.index'); 

//Ruta para ejecutar el metodoupdate del CRUD de ActividadController
Route::post('/actividades/update/{id}', [ActividadController::class,'update'])->middleware(['auth'])->name('actividades.update');

//Ruta para editar una actividad pasando su ID y ver sus datos
Route::get('/actividades/{id}/edit', [ActividadController::class,'edit'])->middleware(['auth'])->name('actividades.edit'); 

//Ruta para destruir/borrar una actividad
Route::get('/actividades/borrar/{id}', [ActividadController::class,'destroy'])->middleware(['auth'])->name('actividades.list');

//Ruta para crear un nueva activdad
Route::get('/actividades/crear', [ActividadController::class, 'create'])->middleware(['auth'])->name('actividades.create');

//Ruta para almacenar la activdad creada
Route::get('/actividades/store', [ActividadController::class,'store'])->middleware(['auth'])->name('actividades.store'); 




//Ruta para ver la lista del CRUD tramos, llama  al metodo index de TramoController
Route::get('/tramos/lista', [TramoController::class,'index'])->middleware(['auth'])->name('tramos.index'); 

//Ruta para ejecutar el metodo update del CRUD de tramos
Route::post('/tramos/update/{id}', [TramoController::class,'update'])->middleware(['auth'])->name('tramos.update');

//Ruta para destruir/borrar un tramo
Route::get('/tramos/borrar/{id}', [TramoController::class,'destroy'])->middleware(['auth'])->name('tramos.list');

//Ruta para crear un nuevo tramo
Route::get('/tramos/crear', [TramoController::class, 'create'])->middleware(['auth'])->name('tramos.create');

//Ruta para almacenar el tramo
Route::get('/tramos/store', [TramoController::class,'store'])->middleware(['auth'])->name('tramos.store'); 

//Ruta para editar un tramo
Route::get('/tramos/{id}/edit', [TramoController::class,'edit'])->middleware(['auth'])->name('tramos.edit'); 

//Ruta para mostrar el horario
Route::get('/tramos/horario', [TramoController::class,'mostrarHorario'])->middleware(['auth'])->name('tramos.horario'); 



//Ruta para almacenar en la tabla tramo_user
Route::get('/tramouser', [TramoUserController::class,'store'])->middleware(['auth'])->name('tramouser.store'); 
//Ruta para ver la lista del CRUD de tramo_user
Route::get('/tramouser/lista', [TramoUserController::class,'index'])->middleware(['auth'])->name('tramosUser.index'); 
//Ruta para destruir/borrar un tramo_user
Route::get('/tramouser/borrar/{id}', [TramoUserController::class,'destroy'])->middleware(['auth'])->name('tramosUser.list');

//Ruta para llamar a la API
Route::get('/api', [ApiComida::class, 'api'])->name('api.index');


require __DIR__ . '/auth.php';
