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
        // Schema::create('users', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('nombre');
        //     $table->string('apellido');
        //     $table->string('dni');
        //     $table->string('email');
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('password');
        //     $table->string('rol')->default('cliente');
        //     $table->string('direccion');
        //     $table->string('ciudad');
        //     $table->integer('telefono');
        //     $table->string('salario')->nullable();
        //     $table->enum('estado' , ['libre', 'ocupado'])->nullable();
        //     $table->rememberToken();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('users');
    }
};
