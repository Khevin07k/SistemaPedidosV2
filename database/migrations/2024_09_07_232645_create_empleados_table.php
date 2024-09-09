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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->date('FechaContratacion');
            $table->string("Puesto",50);
            $table->integer("Salario");
            $table->foreignId("restaurante_id")->constrained()->references("id")->on("restaurantes");
            $table->foreignId('persona_id')->constrained()->references("id")->on("personas");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
