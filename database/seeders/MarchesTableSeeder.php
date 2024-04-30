<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Marche;
use App\Models\Emplacement;
use App\Models\Ville;

class MarchesTableSeeder extends Seeder
{
    public function run(): void
    {
        $emplacement1 = Emplacement::where('numero', 'bp541')->first();
        $emplacement2 = Emplacement::where('numero', 'bp875')->first();

        $ville1 = Ville::where('nom', 'Cotonou')->first();
        $ville2 = Ville::where('nom', 'Porto_Novo')->first();

        Marche::create([
            'nomMarche' => 'Gbégamey',
            'description' => 'Ceci est une description de Gbégamey',
            'capacite' => 1000,
            'adresse' => 'bp975',
            'telephone' => '+229 97093176',
            'image' => 'avatars/img1.jpeg',
            'emplacement_id' => $emplacement1->idEmplacement,
            'ville_id' => $ville1->idVille,
        ]);

        Marche::create([
            'nomMarche' => 'Mènotin',
            'description' => 'Ceci est une description de Mènotin',
            'capacite' => 2000,
            'adresse' => 'bp985',
            'telephone' => '+229 90829540',
            'image' => 'avatars/img1.jpeg',
            'emplacement_id' => $emplacement2->idEmplacement,
            'ville_id' => $ville2->idVille,
        ]);

        Marche::create([
            'nomMarche' => 'Wologuèdè',
            'description' => 'Ceci est une description de Wologuèdè',
            'capacite' => 800,
            'adresse' => 'bp984',
            'telephone' => '+229 67670052',
            'image' => 'avatars/img3.jpeg',
            'emplacement_id' => $emplacement2->idEmplacement,
            'ville_id' => $ville1->idVille,
        ]);
    }
}
