<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController; //crear una clase para acceder a sus archivos
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

// Route::get('/empleado', function () {
//     return view('empleado.index'); // punto para acceder todos los archivos de la ruta
// });
// Route::get('/empleado/create', [EmpleadoController::class,'create']);


///Hace el funcionamiento de las lineas de arriba pero mejor y mas resumido
Route::resource('empleado', EmpleadoController::class);
