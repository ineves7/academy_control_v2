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
            $table->foreignId('genre_id')->constrained('genres');
            $table->enum('level_people', ['INICIANTE', 'INTERMEDIÁRIO', 'AVANÇADO']);
            $table->string('name');
            $table->string('last_name');
            $table->boolean('active');
            $table->date('birthdate');
            $table->string('phone');
            $table->string('email')->unique();
            $table->date('start_date');

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
