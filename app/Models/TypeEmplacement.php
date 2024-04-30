<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TypeEmplacement extends Model
{
    protected $fillable = ['libelle'];

    public function emplacements(): HasMany
    {
        return $this->hasMany(Emplacement::class);
    }
}

