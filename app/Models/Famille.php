<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Famille extends Model
{
    use HasFactory;

    protected $guarded = [

    ];

    public function baseTaxables()
    {
        return $this->hasMany(BaseTaxable::class);
    }
}
