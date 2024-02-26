<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('street');
            $table->string('state');
            $table->string('city');
            $table->string('neighborhood');
            $table->string('price');
            $table->text('images');
            $table->string('area');
            $table->string('rooms');
            $table->string('baths');
            $table->text('description');
            $table->string('mobility');
            $table->text('restaurants');
            $table->text('education');
            $table->text('markets');
            $table->text('health');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
