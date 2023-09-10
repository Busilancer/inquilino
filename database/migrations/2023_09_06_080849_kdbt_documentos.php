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
        Schema::create('kdbt_documentos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('tipo')->nullable();
            $table->integer('tamanho');
            $table->integer('estado');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('kdbt_users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kdbt_documentos');
    }
};
