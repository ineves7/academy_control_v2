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
        Schema::create('peoples', function (Blueprint $table) {
            $table->id();
            $table->foreignID('status_id')->constrained('statuses');
            $table->foreignId('modality_id')->constrained('modalities');
            $table->foreignId('rhythm_id')->constrained('rhythms');
            $table->foreignId('genre_id')->constrained('genres');
            $table->foreignId('level_id')->constrained('levels');
            $table->foreignId('hour_id')->constrained('hours');
            $table->foreignId('weekday_id')->constrained('weekdays');
            $table->string('name');
            $table->date('birthdate');
            $table->string('phone');
            $table->integer('monthly_payment');
            $table->integer('payday');
            $table->timestamps();
            $table->softDeletes();
        });

        
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peoples');
    }
};
