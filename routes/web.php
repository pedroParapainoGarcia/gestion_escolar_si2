<?php

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

//Route::get('/', function () {
  //  return view('welcome');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('/', function () { return view('admin'); });

Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware('auth');
Route::get('/admin/usuarios', [App\Http\Controllers\UsuarioController::class, 'index'])->name('usuarios.index')->middleware('auth');
Route::get('/admin/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'create'])->name('usuarios.create')->middleware('auth');
Route::post('/admin/usuarios', [App\Http\Controllers\UsuarioController::class, 'store'])->name('usuarios.store')->middleware('auth');
Route::get('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'show'])->name('usuarios.show')->middleware('auth');
Route::get('/admin/usuarios/{id}/edit', [App\Http\Controllers\UsuarioController::class, 'edit'])->name('usuarios.edit')->middleware('auth');
Route::put('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'update'])->name('usuarios.update')->middleware('auth');
Route::delete('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'destroy'])->name('usuarios.destroy')->middleware('auth');

Route::get('/admin/roles', [App\Http\Controllers\RolController::class, 'index'])->name('roles.index')->middleware('auth');
Route::get('/admin/roles/create', [App\Http\Controllers\RolController::class, 'create'])->name('roles.create')->middleware('auth');
Route::post('/admin/roles', [App\Http\Controllers\RolController::class, 'store'])->name('roles.store')->middleware('auth');
Route::get('/admin/roles/{id}', [App\Http\Controllers\RolController::class, 'show'])->name('roles.show')->middleware('auth');
Route::get('/admin/roles/{id}/edit', [App\Http\Controllers\RolController::class, 'edit'])->name('roles.edit')->middleware('auth');
Route::put('/admin/roles/{id}', [App\Http\Controllers\RolController::class, 'update'])->name('roles.update')->middleware('auth');
Route::delete('/admin/roles/{id}', [App\Http\Controllers\RolController::class, 'destroy'])->name('roles.destroy')->middleware('auth'); 