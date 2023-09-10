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
        Schema::create('kdbt_listagem', function (Blueprint $table) {
            $table->id();
            $table->integer('quarto');
            $table->integer('sala');
            $table->integer('cozinha');
            $table->integer('wc');
            $table->integer('quintal');
            $table->integer('pisos');
            $table->integer('site');
            $table->integer('piscina');
            $table->integer('jardin');
            $table->integer('playground');
            $table->integer('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kdbt_listagem');
    }
};
