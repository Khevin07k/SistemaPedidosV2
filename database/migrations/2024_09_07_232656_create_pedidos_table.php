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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->integer("NumeroPedido");
            $table->date("Fecha")->useCurrent();
            $table->enum("EstadoPedido", ["En proceso", "Finalizado", "Cancelado"])->default("En Proceso");
            $table->string("Observacion");
            $table->decimal("TotalPagar", 10, 2); // Cambiar de deciaml a decimal
            $table->foreignId("cliente_id")->constrained()->references("id")->on("clientes");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
