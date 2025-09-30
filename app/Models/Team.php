<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'id',
        'name',
        'pokemons', // This could be a JSON field or a related table in a more complex setup
    ];
}
