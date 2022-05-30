<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\IndexController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/categoria/relatorio',[CategoriaController::class, 'relatorio']);

Route::get('/categoria/lista',[CategoriaController::class, 'lista']);
Route::get('/categoria/novo', [CategoriaController::class, 'novo']);
Route::post('/categoria/salvar', [CategoriaController::class, 'salvar']);
Route::get('/categoria/editar/{id}',[CategoriaController::class, 'editar']);
Route::get('/categoria/excluir/{id}',[CategoriaController::class, 'excluir']);

Route::get('/categoria/url', [CategoriaController::class, 'url']);

Route::get('/noticia/lista',[NoticiaController::class, 'lista']);
Route::get('/noticia/novo', [NoticiaController::class, 'novo']);
Route::post('/noticia/salvar', [NoticiaController::class, 'salvar']);
Route::get('/noticia/editar/{id}',[NoticiaController::class, 'editar']);
Route::get('/noticia/excluir/{id}',[NoticiaController::class, 'excluir']);

Route::get('/', [IndexController::class, 'index']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
