<?php

namespace App\Http\Repositories;

use App\Models\Pokemon;
use Illuminate\Database\Eloquent\Collection;

class PokemonRepository{
    
    public function findAll(?string $filter = null): Collection{
        // return Pokemon::all();

        if (is_null($filter)) {
            return Pokemon::all();
        }
        return Pokemon::where('name', 'like', "%$filter%")->get();

    }

    public function create(array $data): Pokemon{
        // return $pokemon->save();
        return Pokemon::create([data]);
    }

    public function edit(Pokemon $pokemon): bool{
        return $pokemon->save();
    }

    public function delete(int $id): bool{
        return Pokemon::destroy($id);
    }

}