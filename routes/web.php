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

Route::get('/', function () {
    return view('welcome');
});

//Definindo meu Controlador
Route::get('/incidents', [IncidentsController::class, 'index']);