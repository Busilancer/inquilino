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
        Schema::create('kdbt_imagens_imovel', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->string('url');
            $table->integer('tamanho');
            $table->string('tipo');
            $table->string('dimensao');
            $table->integer('estado');
            $table->unsignedBigInteger('id_imovel');
            $table->foreign('id_imovel')->references('id')->on('kdbt_imoveis')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kdbt_imagens_imovel');
    }
};
