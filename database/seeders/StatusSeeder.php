<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
            'status' => 'Ativo',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('statuses')->insert([
            'status' => 'Inativo',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
