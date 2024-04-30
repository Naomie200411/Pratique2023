<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeEmplacement;


class TypeEmplacementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         TypeEmplacement::create([
            'libelle' => 'Emplacement1',
        ]);

        TypeEmplacement::create([
            'libelle' => 'Emplacement2',
        ]);
    }
}
