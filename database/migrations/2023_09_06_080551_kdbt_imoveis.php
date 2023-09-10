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
        Schema::create('kdbt_imoveis', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descricao');
            $table->string('localizacao');
            $table->string('coordenadas');
            $table->string('categoria');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_tipo');
            $table->unsignedBigInteger('id_listagem');
            $table->foreign('id_user')->references('id')->on('kdbt_users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_tipo')->references('id')->on('kdbt_tipo_imovel')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_listagem')->references('id')->on('kdbt_listagem')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kdbt_imoveis');
    }
};
