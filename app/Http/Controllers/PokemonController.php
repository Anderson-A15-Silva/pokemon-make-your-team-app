<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Repositories\PokemonRepository;


class PokemonController extends Controller
{
    
    public function __construct(private PokemonRepository $repository) {
        // Middleware can be added here if needed
        // For example, $this->middleware('auth');
    }

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

    // Validation functions here
    // Example: function store (Request $request): Redirect Response { ... }

}
