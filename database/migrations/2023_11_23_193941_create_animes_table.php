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
        Schema::create('animes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_anime', 50);
            $table->string('nome_autor', 50);
            $table->string('nome_estudio', 50);
            $table->string('gen_anime', 50);
            $table->date('data_lançamento');
            $table->date('data_termino');
            $table->integer('num_episodios');
            $table->text('sinopse');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animes');
    }
};
