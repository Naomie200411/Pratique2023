<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ville;

class VillesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Création d'un enregistrement dans la table 'villes'
         Ville::create([
            'nom' => 'Cotonou',
        ]);

        // Création de plusieurs enregistrements dans la table 'villes'
        Ville::create([
            'nom' => 'Porto_Novo',
        ]);
    }
}
