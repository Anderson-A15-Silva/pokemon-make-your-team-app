<?php

namespace App\Http\Repositories;

use App\Models\User;

class UserRepository{

    public function register(User $user): bool{
        // return $team->save();
        return User::create([data]);
    }

    public function login(Team $team): bool{
        // Login logic here
    }
}