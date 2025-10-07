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
        return Pokemon::create($data);
    }

    public function edit(int $id, array $data): bool{
        // return $pokemon->save();
        return Pokemon::where('id', $id)->update($data);
    }

    public function delete(int $id): bool{
        return Pokemon::destroy($id);
    }
}