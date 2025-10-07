<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $fillable = [
        'name',
        'type1',
        'type2',
        'weaknesses',
        'ability',
        'evolutions',
        'level',
        'hp',
        'attack',
        'defense',
        'special_attack',
        'special_defense',
        'speed',
        'height',
        'weight',
        'gender',
        'category',
        'moves',
    ];

    protected $casts = [
        'weaknesses' => 'array',
        'evolutions' => 'array',
        'moves' => 'array',
    ];
}
