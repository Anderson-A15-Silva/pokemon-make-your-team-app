<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PokemonController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;

Route::get('/pokemons',[PokemonController::class,'index'])->name('pokemon.index');
Route::get('/pokemons', [PokemonController::class])->name('pokemon.register');
Route::get('/pokemons/{id}' ,[PokemonController::class,'show'])->name('pokemon.show');
Route::get('/pokemons/{id}/edit', [PokemonController::class, 'edit'])->name('pokemon.edit');

//team

Route::get('/', [TeamController::class,'index'])->name('team.index');
Route::get('/teams', [TeamController::class])->name('team.register');
Route::get('/teams/{id}' ,[TeamController::class,'show'])->name('team.show');
Route::get('/teams/{id}/edit', [TeamController::class, 'edit'])->name('team.edit');

//user 

Route::get('/login', [UserController::class, 'index'])->name('user.login');
Route::get('/user/create',[LoginController::class,'create'])->name('user.create');
