<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\TimeController;
use App\Http\Controllers\SprintController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TarefaController;

/*
|--------------------------------------------------------------------------
| Web Routes - rotas web do sistema
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[NavigationController::class,'home'])->name('home');

/* Rotas para as views dos formulários de cadastros */
Route::resource("/projeto", ProjetoController::class);
Route::resource("/time", TimeController::class);
Route::resource("/sprint", SprintController::class);
Route::resource("/item", ItemController::class);
Route::resource("/tarefa", TarefaController::class);

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('projeto', function () {
    return view('projeto');
})->middleware(['auth', 'verified'])->name('projeto');

Route::get('time', function () {
    return view('time');
})->middleware(['auth', 'verified'])->name('time');

Route::get('sprint', function () {
    return view('sprint');
})->middleware(['auth', 'verified'])->name('sprint');

Route::get('item', function () {
    return view('item');
})->middleware(['auth', 'verified'])->name('item');

Route::get('tarefa', function () {
    return view('tarefa');
})->middleware(['auth', 'verified'])->name('tarefa');


/* Rotas para as views dos formulários de cadastros */
Route::get('/projeto', function () {
    return view('site.projeto');
})->name('projeto');

Route::get('/time', function () {
    return view('site.time');
})->name('time');

Route::get('/sprint', function () {
    return view('site.sprint');
})->name('sprint');

Route::get('/item', function () {
    return view('site.item');
})->name('item');

Route::get('/tarefa', function () {
    return view('site.tarefa');
})->name('tarefa');

require __DIR__.'/auth.php';
