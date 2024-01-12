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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('number1')->default('+221 77 361 69 69')->nullable();
            $table->string('number2')->default('+221 78 142 51 75')->nullable();
            $table->string('number3')->default('+221 77 397 06 34')->nullable();
            $table->string('number_fixe')->nullable();
            $table->string('logo')->nullable();
            $table->string('bg')->nullable();
            $table->string('favicon')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();
            $table->string('email')->nullable();
            $table->string('adresse')->nullable();
            $table->text('description')->nullable();
            $table->text('map')->nullable();
            $table->integer('projet')->default(0)->nullable();
            $table->integer('clients')->default(0)->nullable();
            $table->integer('partenaires')->default(0)->nullable();
            $table->integer('experiences')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
