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
        Schema::create('factura_producto', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('factura_id');
            $table->unsignedBigInteger('producto_id');

            $table->foreign('factura_id')->references('id')->on('facturas')->onDelete('cascade'); 
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade'); 
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factura_producto');
    }
};
