<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\TarefasController;

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

Route::prefix('/tarefas') -> group(function () {
    Route::get('/', [TarefasController:: class, 'list']) -> name('tarefas.list'); //Listagem de tarefas

    Route::get('add', [TarefasController:: class, 'add']) -> name('tarefas.add'); //Tela de adição de nova tarefa

    Route::post('add', [TarefasController:: class, 'addAction']); //Ação de adição de nova tarefa

    Route::get('edit/{id}', [TarefasController:: class, 'edit']) -> name('tarefas.edit'); //Tela de edição

    Route::post('edit/{id}', [TarefasController:: class, 'editAction']); //Ação de edição

    Route::get('delete/{id}', [TarefasController:: class, 'del']) -> name('tarefas.del'); //Ação de deletar

    Route::get('marcar/{id}', [TarefasController:: class, 'done']) -> name('tarefas.done'); //Marcar resolvido ou não resolvido
});

// Route::prefix('/config') -> group(function () {
//     Route::get('/', [ConfigController:: class, 'index']);

//     Route::post('/', [ConfigController:: class, 'index']);

//     Route::get('/info', [ConfigController:: class, 'info']);

//     Route::get('/permissoes', [ConfigController:: class, 'permissoes']);
// });

// Route::fallback(function () {
//     return view('404');
// });

// Route::get('/config', function() {
//     // $link = route('info');

//     // echo "LINK: ".$link;

//     // return redirect() -> route ('permissoes');

//     return view('config');
// });

// Route::get('/config/info', function() {
//     echo "Configurações INFO";
// })->name('info');

// Route::get('/config/permissoes', function() {
//     echo "Configurações PERMISSÕES";
// })->name('permissoes');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
