<?php

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

Route::get('/', [HomeController::class, 'index'])->name('index.show');

Route::get('/create', [HomeController::class, 'createPage'])->name('create.show');

Route::post('/createTask', [HomeController::class, 'createTask'])->name('createTask');

Route::get('/changeStatus/{id}',[HomeController::class, 'changeStatus'])->name('status');


Route::get('/edit/{id}', [HomeController::class, 'editTask'])->name('task.edit');

Route::put('/editTask{id}', [HomeController::class, 'updateEditTask'])->name('editTask.update');

Route::get('/deleteTask/{id}', [HomeController::class, 'deleteTask'])->name('task.delete');








