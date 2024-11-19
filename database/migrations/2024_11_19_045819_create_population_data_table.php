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
        Schema::create('population_data', function (Blueprint $table) {
            $table->id();
            $table->year('year');
            $table->integer('children')->default(0);
            $table->integer('teenagers')->default(0);
            $table->integer('adults')->default(0);
            $table->integer('elderly')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('population_data');
    }
};
