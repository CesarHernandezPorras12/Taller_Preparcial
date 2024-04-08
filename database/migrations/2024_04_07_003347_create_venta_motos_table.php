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
        Schema::create('venta_motos', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_Vendedor');
            $table->string('Nombre_Comprador');
            $table->string('Marca_Moto');
            $table->double('Valor_Moto');
            $table->date('Fecha_Venta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venta_motos');
    }
};
