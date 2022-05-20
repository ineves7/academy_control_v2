<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeekdaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Segunda e Quarta

        DB::table('weekdays')->insert([
            'weekday' => 'Segunda-Feira',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('weekdays')->insert([
            'weekday' => 'Terça-Feira',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('weekdays')->insert([
            'weekday' => 'Quarta-Feira',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('weekdays')->insert([
            'weekday' => 'Quinta-Feira',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('weekdays')->insert([
            'weekday' => 'Sexta-Feira',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('weekdays')->insert([
            'weekday' => 'Sábado',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('weekdays')->insert([
            'weekday' => 'Domingo',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}