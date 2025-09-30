<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PokemonController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;

Route::get('/',[PokemonController::class,'index'])->name('pokemon.index');
Route::get('/pokemons/create', [PokemonController::class, 'create'])->name('pokemon.create');
Route::get('/pokemons/{id}' ,[PokemonController::class,'show'])->name('pokemon.show');
Route::get('/pokemons/{id}/edit', [PokemonController::class, 'edit'])->name('pokemon.edit');

//team

Route::get('/teams', [TeamController::class,'index'])->name('team.index');
Route::get('/teams/create', [TeamController::class, 'create'])->name('team.create');
Route::get('/teams/{id}' ,[TeamController::class,'show'])->name('team.show');
Route::get('/teams/{id}/edit', [TeamController::class, 'edit'])->name('team.edit');

//user 

Route::get('/login', [UserController::class, 'index'])->name('user.login');
Route::get('/user/create',[UserController::class, 'create'])->name('user.create');
