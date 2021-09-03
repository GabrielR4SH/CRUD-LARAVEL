<?php

use Illuminate\Support\Facades\Route;

//Usando Controlador no namespace
use App\Http\Controllers\IncidentsController;
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

//Rota Padrãp
Route::get('/', function () {
    return view('welcome');
});

//Rotas para o Crud
Route::get('/incidents', [IncidentsController::class, 'index']);
Route::post('/incidents', [IncidentsController::class, 'store']);
Route::get('/incidents/create', [IncidentsController::class, 'create']);
Route::get('/incidents/{incident}/edit', [IncidentsController::class, 'edit']);
Route::put('/incidents/{incident}', [IncidentsController::class, 'update']);
