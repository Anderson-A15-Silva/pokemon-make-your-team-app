<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class PokemonController extends Controller
{
    public function index(Request $request): View{
        return view('index');
    }

    public function create(): View{
        return view('builder');
    }

    public function show(): View{
        return view('status');
    }

    public function edit(): View{
        return view('pokeEdit');
    }
}
