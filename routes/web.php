<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

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

Route::resource('projects',ProjectController::class);
// Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
// Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
// Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
// Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
// Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
// Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
// Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');