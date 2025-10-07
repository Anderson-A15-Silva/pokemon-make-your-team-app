<?php

namespace App\Http\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserRepository{

    public function register(array $data): bool{
        // return $team->save();
        return User::create($data);
    }

    public function login(array $credentials): bool {
        return Auth::attempt($credentials);
    }
}