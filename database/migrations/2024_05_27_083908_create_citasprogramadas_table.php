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
        Schema::create('citasprogramadas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ambiente');
            $table->unsignedInteger('profesor');
            $table->dateTime('fechahora');
            $table->timestamps();

            $table->foreign('ambiente')->references('idAmbiente')->on('ambientes');
            $table->foreign('profesor')->references('idProfesor')->on('profesores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citasprogramadas');
    }
};
