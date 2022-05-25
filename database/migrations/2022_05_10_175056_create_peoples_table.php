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
            $table->foreignId('genre_id')->constrained('genres');
            $table->foreignId('level_id')->constrained('levels');
            $table->string('name');
            $table->date('birthdate');
            $table->string('phone');
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
