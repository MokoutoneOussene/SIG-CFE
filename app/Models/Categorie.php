<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $guarded = [

    ];

    public function Contribuable()
    {
        return $this->hasMany(Contribuable::class);
    }
}
