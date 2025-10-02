<?php

namespace App\Http\Repositories;

use App\Models\Team;

class TeamRepository{
    public function findAll(): Collection{
        // return Team::all();
        return Team::where('name', 'like', "%$filter%")->get();
    }

    public function create(Team $team): bool{
        // return $team->save();
        return Team::create([data]);
    }

    public function edit(Team $team): bool{
        return $team->save();
    }

    public function delete(int $id): bool{
        return Team::destroy($id);
    }
}