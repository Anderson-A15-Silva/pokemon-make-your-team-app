<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View; 
use App\Http\Repositories\TeamRepository;

class TeamController extends Controller
{

    public function __construct(private PokemonRepository $repository) {
        // Middleware can be added here if needed
        // For example, $this->middleware('auth');
    }

    public function index(Request $request): View {
        return view('list');
    }

    public function create(): View {
        return view('pickList');
    }

    public function show(): View {
        return view('team-details');
    }

    public function edit(): View {
        return view('teamEdit');
    }

    // Validation functions here
    // Example: function store (Request $request): Redirect Response { ... }
}
