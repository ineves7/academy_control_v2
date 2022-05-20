<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hours')->insert([
            'hour' => '9:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '9:30',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '10:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '10:30',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '11:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '11:30',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '12:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '12:30',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '13:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '13:30',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '14:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '14:30',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '15:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '15:30',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '16:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '16:30',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '17:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '17:30',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '18:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '18:30',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '19:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '19:30',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '20:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '20:30',
            'created_at' => now(),
            'updated_at' => now()
        ],);

        DB::table('hours')->insert([
            'hour' => '21:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '21:30',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('hours')->insert([
            'hour' => '22:00',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
