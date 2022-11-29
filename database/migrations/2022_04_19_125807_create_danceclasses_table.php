<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danceclasses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rhythm_id')->constrained('rhythms');
            $table->string('name_danceclass');
            $table->enum('modality', ['COLETIVO', 'PARTICULAR', 'EVENTO']);
            $table->enum('status_danceclass', ['ABERTA', 'PAUSADA', 'FINALIZADA']);
            $table->enum('level_danceclass', ['INICIANTE', 'INTERMEDIÁRIO', 'AVANÇADO']);
            $table->enum('week_day', ['SEGUNDA-FEIRA', 'TERÇA-FEIRA', 'QUARTA-FEIRA', 'QUINTA-FEIRA', 'SEXTA-FEIRA', 'SÁBADO', 'DOMINGO']);
            $table->time('start_hour');
            $table->time('end_hour');
            $table->date('first_date');
            $table->date('end_date')->nullable();
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
        Schema::dropIfExists('danceclasses');
    }
};
