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
        Schema::create('kdbt_mensagens', function (Blueprint $table) {
            $table->id();
            $table->text('mensagem');
            $table->integer('estado');
            $table->unsignedBigInteger('id_origem');
            $table->unsignedBigInteger('id_remitente');
            $table->foreign('id_origem')->references('id')->on('kdbt_users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_remitente')->references('id')->on('kdbt_users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kdbt_mensagens');
    }
};
