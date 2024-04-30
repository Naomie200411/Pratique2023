<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Marche extends Model
{
    protected $primaryKey = 'idMarche';
    protected $fillable = ['nomMarche', 'description', 'capacite', 'adresse', 'telephone', 'image', 'emplacement_id', 'ville_id'];

    public function emplacement(): BelongsTo
    {
        return $this->belongsTo(Emplacement::class,'emplacement_id');
    }

    public function ville(): BelongsTo
    {
        return $this->belongsTo(Ville::class,'ville_id');
    }
}
