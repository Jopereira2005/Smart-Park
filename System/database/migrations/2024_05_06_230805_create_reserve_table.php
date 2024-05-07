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
        Schema::create('Reserves', function (Blueprint $table) {
            $table->id('id');
            $table->date('date_reserve')->nullable();
            $table->float('price_per_hour')->default(0);
            $table->float('total_price')->nullable();
            $table->time('time_enter')->nullable();
            $table->time('time_exit')->nullable();
            $table->enum('payment_method', ['Crédito', 'Dinheiro', 'Pix', 'Débito'])->nullable();
            $table->enum('status', ['Reservado', 'Cancelado', 'Finalizado', 'Em Processo', '#'])->default('#');
            $table->unsignedBigInteger('id_client');
            $table->unsignedBigInteger('id_park_lot');

            $table->foreign('id_client')->references('id')->on('Clients');
            $table->foreign('id_park_lot')->references('id')->on('Park_lots');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Reserves');
    }
};
