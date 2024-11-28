<?php
use  App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
/*Aqui se colocan las url*/

Route::get('/',HomeController::class);

Route::controller(CursoController::class)->group(function() {
    Route::get('Cursos',"index");//Ruta para mostrar los cursos
    Route::get('Cursos/create',"create");//Ruta para crear un curso
    Route::get('Cursos/{curso}',"show");//Ruta para mostrar un curso espe
}
);
/*Route::middleware([n
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});*/

