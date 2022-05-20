<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'genre' => 'Feminino',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('genres')->insert([
            'genre' => 'Masculino',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
