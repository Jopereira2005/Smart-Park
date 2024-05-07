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
        Schema::create('Park_lots', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->enum('status', ['0', '1', '2']);
            $table->enum('type', ['Normal', 'Preferencial/Idoso', 'Preferencial/Deficiente']);
            $table->unsignedBigInteger('id_commerce');
            $table->foreign('id_commerce')->references('id')->on('Commerces');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('park_lots');
    }
};
