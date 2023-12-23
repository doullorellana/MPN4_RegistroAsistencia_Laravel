    <?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\MatriculaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Rutas para los Docentes
Route::get('/docentes',[DocenteController::class, 'index']);
Route::post('/docentes',[DocenteController::class, 'store']);
Route::put('/docentes/{id}',[DocenteController::class, 'update']);
Route::get('/docentes/{id}',[DocenteController::class, 'show']);
Route::delete('/docentes/{id}',[DocenteController::class, 'destroy']);


// Rutas para los Alumnos
Route::get('/alumnos',[AlumnoController::class, 'index']);
Route::post('/alumnos',[AlumnoController::class, 'store']);
Route::put('/alumnos/{id}',[AlumnoController::class, 'update']);
Route::get('/alumnos/{id}',[AlumnoController::class, 'show']);
Route::delete('/alumnos/{id}',[AlumnoController::class, 'destroy']);


// Rutas para los Cursos
Route::get('/cursos',[CursoController::class, 'index']);
Route::post('/cursos',[CursoController::class, 'store']);
Route::put('/cursos/{id}',[CursoController::class, 'update']);
Route::get('/cursos/{id}',[CursoController::class, 'show']);
Route::delete('/cursos/{id}',[CursoController::class, 'destroy']);


// Rutas para las Matriculas
Route::get('/matriculas',[MatriculaController::class, 'index']);
Route::post('/matriculas',[MatriculaController::class, 'store']);
Route::put('/matriculas/{id}',[MatriculaController::class, 'update']);
Route::get('/matriculas/{id}',[MatriculaController::class, 'show']);
Route::delete('/matriculas/{id}',[MatriculaController::class, 'destroy']);


// Rutas para el Registro de Asistencias
Route::get('/asistencias',[AsistenciaController::class, 'index']);
Route::post('/asistencias',[AsistenciaController::class, 'store']);
Route::put('/asistencias/{id}',[AsistenciaController::class, 'update']);
Route::get('/asistencias/{id}',[AsistenciaController::class, 'show']);
Route::delete('/asistencias/{id}',[AsistenciaController::class, 'destroy']);
