<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanceclassPeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danceclass_people', function (Blueprint $table) {
            $table->id();
            $table->foreignId('danceclass_id')->constrained('danceclasses');
            $table->foreignId('people_id')->constrained('peoples');
            $table->float('monthly_payment', 15, 2);
            $table->string('payday');
            $table->enum('person_type', ['ALUNO', 'EQUIPE', 'PROFESSOR']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */



    public function down()
    {
        Schema::dropIfExists('danceclass_people');
    }
};
