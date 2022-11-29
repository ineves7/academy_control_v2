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
use App\Models\WeekDay;

class DefaultInserts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
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
