<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Emplacement extends Model
{
    protected $fillable = ['numero', 'type_emplacement_id'];

    public function typeEmplacement(): BelongsTo
    {
        return $this->belongsTo(TypeEmplacement::class);
    }

    public function marches(): BelongsTo
    {
        return $this->belongsTo(Marche::class);
    }
}
