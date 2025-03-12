<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('make_id'); 
            $table->string('model');
            $table->string('category'); 
            $table->year('year');
            $table->string('slug')->unique();
            $table->text('description');
            $table->integer('mileage');
            $table->string('transmission');
            $table->string('engine'); 
            // $table->string('vin')->unique();
            $table->string('exterior_color');
            // $table->string('interior_color'); 
            $table->string('drive');
            $table->integer('price');
            // $table->string('keys');
            // $table->string('ownership'); 
            $table->timestamps();

            $table->foreign('make_id')->references('id')->on('car_makes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
