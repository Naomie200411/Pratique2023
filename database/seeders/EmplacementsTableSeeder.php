<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Emplacement;
use App\Models\TypeEmplacement;

class EmplacementsTableSeeder extends Seeder
{
    public function run(): void
    {
        $typeEmplacement1 = TypeEmplacement::where('libelle', 'Emplacement1')->first();
        $typeEmplacement2 = TypeEmplacement::where('libelle', 'Emplacement2')->first();

        Emplacement::create([
            'numero' => 'bp541',
            'type_emplacement_id' => $typeEmplacement1->idType,
        ]);

        Emplacement::create([
            'numero' => 'bp875',
            'type_emplacement_id' => $typeEmplacement2->idType,
        ]);
    }
}
