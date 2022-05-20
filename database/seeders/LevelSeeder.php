<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
            'level' => 'iniciante',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('levels')->insert([
            'level' => 'Intermediario',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('levels')->insert([
            'level' => 'Avançado',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
