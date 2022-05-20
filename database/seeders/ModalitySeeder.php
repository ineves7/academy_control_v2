<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('modalities')->insert([
            'modality' => 'Coletivo',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('modalities')->insert([
            'modality' => 'Particular',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('modalities')->insert([
            'modality' => 'Coletivo e Particular',
            'created_at' => now(),
            'updated_at' => now()
        ]);


    }
}
