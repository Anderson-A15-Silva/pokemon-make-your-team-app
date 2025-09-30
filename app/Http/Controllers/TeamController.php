<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View; 

class TeamController extends Controller
{
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
}
