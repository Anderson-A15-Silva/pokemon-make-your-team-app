<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Repositories\UserRepository;


class UserController extends Controller
{

    public function __construct(private PokemonRepository $repository) {
        // Middleware can be added here if needed
        // For example, $this->middleware('auth');
    }

    public function index(Request $request): View{
        return view('login');
    }

    public function create(): View{
        return view('register');
    }

    // Validation functions here
    // Example: function store (Request $request): Redirect Response { ... }
}
