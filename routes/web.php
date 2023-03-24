<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GatosController;

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

// Rotas para o CRUD de gatos

// Rota para a listagem de gatos
Route::get('/gatos', [GatosController::class, 'index'])->name('gatos.index');

// Rota para o formulário de criação de gatos
Route::get('/gatos/novo', [GatosController::class, 'create'])->name('gatos.create');

// Rota para o mostrar um gato específico
Route::get('/gatos/{gato}', [GatosController::class, 'show'])->name('gatos.show');

// Rota para o formulário de edição de gatos
Route::get('/gatos/{gato}/editar', [GatosController::class, 'edit'])->name('gatos.edit');

// Rota que armazena um novo gato no banco de dados
Route::post('/gatos', [GatosController::class, 'store'])->name('gatos.store');

// Rota que atualiza um gato específico no banco de dados
Route::put('/gatos/{gato}', [GatosController::class, 'update'])->name('gatos.update');

// Rota que remove um gato específico do banco de dados
Route::delete('/gatos/{id}', [GatosController::class, 'destroy'])->name('gatos.destroy');
