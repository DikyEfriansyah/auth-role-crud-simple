<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\LoginController;

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


Route::get('/login', [LoginController::class, 'loginpage'])->name('login');
Route::post('/storelogin', [LoginController::class, 'storelogin'])->name('storelogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'cekrole:user,gardener,desaigner'])->group(function () {
    Route::get('/', function () {
        return view('pages.home');
    });
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects/create', [ProjectController::class, 'store']);
    Route::get('/projects/view/{id}', [ProjectController::class, 'show'])->name('projects.show');
    Route::get('/projects/edit/{id}', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/edit/{id}', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');
});
