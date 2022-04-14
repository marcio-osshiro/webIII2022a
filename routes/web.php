<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessorController;
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

Route::get('/professor/lista', [ProfessorController::class, 'lista']);
Route::get('/professor/novo', [ProfessorController::class, 'novo']);
Route::post('/professor/salvar', [ProfessorController::class, 'salvar']);
