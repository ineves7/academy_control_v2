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
            $table->foreignId('level_id')->constrained('levels');
            $table->foreignId('category_id')->constrained('categories');
            $table->boolean('active');
            $table->string('name');
            $table->date('birthdate');
            $table->string('phone');
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
