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
        Schema::create('platos_pedidos', function (Blueprint $table) {
            $table->foreignId('plato_id')->constrained('platos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('pedido_id')->constrained('pedidos')->onDelete('cascade')->onUpdate('cascade');
            $table->primary(['plato_id', 'pedido_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platos_pedidos');
    }
};
