<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TodoListController;

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
Route::get('/', [TodoListController::class, 'index'])->name('index');
Route::post('/save-task', [TodoListController::class, 'saveTask'])->name('save');
Route::get('/delete-task/{id}', [TodoListController::class, 'deleteTask'])->name('removeTask');
Route::get('/update-task/{id}', [TodoListController::class, 'updateTask'])->name('updateTask');
Route::post('/save-updated-task', [TodoListController::class, 'saveUpdatedTask'])->name('saveUpdatedTask');
