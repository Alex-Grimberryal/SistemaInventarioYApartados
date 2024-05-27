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
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ambiente');
            $table->unsignedInteger('categoria');
            $table->unsignedInteger('marca');
            $table->string('nroSerie', 50);
            $table->string('articulo', 70);
            $table->date('fechaAdq');
            $table->timestamps();

            $table->foreign('ambiente')->references('idAmbiente')->on('ambientes');
            $table->foreign('categoria')->references('idCategoria')->on('categorias');
            $table->foreign('marca')->references('idMarca')->on('marcas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulos');
    }
};
