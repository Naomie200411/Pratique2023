<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ville extends Model
{
    protected $fillable = ['nom'];

    public function marches(): HasMany
    {
        return $this->hasMany(Marche::class);
    }
}
