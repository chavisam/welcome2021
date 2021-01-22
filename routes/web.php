<?php

use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\AdminController;
use App\Http\Livewire\CreateReparations;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/users', App\Http\Livewire\UsersTable::class)->name('users')->middleware('admin');
Route::get('/listado', App\Http\Livewire\ListadoTable::class)->name('listado');
Route::get('/create', App\Http\Livewire\CreateReparations::class)->name('create');
Route::get('/editar/{modif}', App\Http\Livewire\EditarReparations::class)->name('editar');
Route::get('/listado_planta', App\Http\Livewire\ListadoPlanta::class)->name('listado_planta');
Route::get('/listado_fecha', App\Http\Livewire\ListadoFecha::class)->name('listado_fecha');
//Route::get('/editar_usuario/{usuario}', App\Http\Livewire\EditarUsuario::class)->name('editar_usuario');