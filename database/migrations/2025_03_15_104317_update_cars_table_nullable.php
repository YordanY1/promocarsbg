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
        Schema::table('cars', function (Blueprint $table) {
            $table->dropUnique('cars_slug_unique');

            $table->unsignedBigInteger('make_id')->nullable()->change();
            $table->string('model')->nullable()->change();
            $table->string('category')->nullable()->change();
            $table->year('year')->nullable()->change();
            $table->string('slug')->nullable()->change();
            $table->text('description')->nullable()->change();
            $table->integer('mileage')->nullable()->change();
            $table->string('transmission')->nullable()->change();
            $table->string('engine')->nullable()->change();
            $table->string('exterior_color')->nullable()->change();
            $table->string('drive')->nullable()->change();
            $table->integer('price')->nullable()->change();
            $table->integer('horsepower')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('cars', function (Blueprint $table) {
            $table->unsignedBigInteger('make_id')->nullable(false)->change();
            $table->string('model')->nullable(false)->change();
            $table->string('category')->nullable(false)->change();
            $table->year('year')->nullable(false)->change();
            $table->string('slug')->nullable(false)->change();
            $table->text('description')->nullable(false)->change();
            $table->integer('mileage')->nullable(false)->change();
            $table->string('transmission')->nullable(false)->change();
            $table->string('engine')->nullable(false)->change();
            $table->string('exterior_color')->nullable(false)->change();
            $table->string('drive')->nullable(false)->change();
            $table->integer('price')->nullable(false)->change();
            $table->integer('horsepower')->nullable(false)->change();

            $table->unique('slug', 'cars_slug_unique');
        });
    }
};
