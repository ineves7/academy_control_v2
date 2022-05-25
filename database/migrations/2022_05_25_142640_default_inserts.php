<?php

use App\Models\Genre;
use App\Models\Hour;
use App\Models\Level;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use App\Models\MatrialStatus;
use App\Models\Status;
use App\Models\User;
use App\Models\Week_day;

class DefaultInserts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $week_days = [
            [   
                'week_day' => 'Segunda-Feira',
            ],
            [   
                'week_day' => 'Terça-Feira',
            ],
            [   
                'week_day' => 'Quarta-Feira',
            ],
            [   
                'week_day' => 'Quinta-Feira',
            ],
            [   
                'week_day' => 'Sexta-Feira',
            ],
            [   
                'week_day' => 'Sábado',
            ],
            [   
                'week_day' => 'Domingo',
            ],
        ];

        foreach ($week_days as $week_day) {
            Week_day::firstOrCreate($week_day);
        }

        $hours = [
            [   
                'hour' => '9:00',
            ],
            [   
                'hour' => '9:30',
            ],
            [   
                'hour' => '10:00',
            ],
            [   
                'hour' => '10:30',
            ],
            [   
                'hour' => '11:00',
            ],
            [   
                'hour' => '11:30',
            ],
            [   
                'hour' => '12:00',
            ],
            [   
                'hour' => '12:30',
            ],
            [   
                'hour' => '13:00',
            ],
            [   
                'hour' => '13:30',
            ],
            [   
                'hour' => '14:00',
            ],
            [   
                'hour' => '14:30',
            ],
            [   
                'hour' => '15:00',
            ],
            [   
                'hour' => '15:30',
            ],
            [   
                'hour' => '16:00',
            ],
            [   
                'hour' => '16:30',
            ],
            [   
                'hour' => '17:00',
            ],
            [   
                'hour' => '17:30',
            ],
            [   
                'hour' => '18:00',
            ],
            [   
                'hour' => '18:30',
            ],
            [   
                'hour' => '19:00',
            ],
            [   
                'hour' => '19:30',
            ],
            [   
                'hour' => '20:00',
            ],
            [   
                'hour' => '20:30',
            ],
            [   
                'hour' => '21:00',
            ],
            [   
                'hour' => '21:30',
            ],
            [   
                'hour' => '22:00',
            ],
        ];

        foreach ($hours as $hour) {
            Hour::firstOrCreate($hour);
        }
        
        $levels = [
            [   
                'level' => 'Iniciante',
            ],
            [   
                'level' => 'Intermediário',
            ],
            [   
                'level' => 'Avançado',
            ],
            
        ];

        foreach ($levels as $level) {
            Level::firstOrCreate($level);
        }

        $genres = [
            [
                'genre' => 'Feminino'
            ],
            [
                'genre' => 'Masculino'
            ]
        ];
        foreach ($genres as $genre) {
            Genre::firstOrCreate($genre);
        }

        $statuses = [
            [
                'status' => 'Ativo'
            ],
            [
                'status' => 'Inativo'
            ]
        ];
        foreach ($statuses as $status) {
            Status::firstOrCreate($status);
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
