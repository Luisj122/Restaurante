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
            $table->bigincrements('id');
            $table->foreignId('cliente_id')->constrained('users');
            $table->foreignId('restaurante_id')->constrained('restaurantes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('repartidor_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');;
            $table->enum('estado' , ['recibido', 'finalizado', 'entregado', 'cancelado']);
        
                    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido');
    }
};
