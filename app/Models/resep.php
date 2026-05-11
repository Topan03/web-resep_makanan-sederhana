<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $fillable = [
        'title',
        'image',
        'description',
        'ingredients',
        'steps'
    ];
}