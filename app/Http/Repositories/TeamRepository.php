<?php

namespace App\Http\Repositories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Collection;

class TeamRepository{
    public function findAll(): Collection{
        // return Team::all();
        return Team::where('name', 'like', "%$filter%")->get();
    }

    public function create(array $data): bool{
        // return $team->save();
        return Team::create($data);
    }

    public function edit(array $data): bool{
        // return $team->save();
        return Team::where('id', $id)->update($pokemon);
    }

    public function delete(int $id): bool{
        return Team::destroy($id);
    }
}