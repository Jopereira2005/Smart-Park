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
        Schema::create('Addresses', function (Blueprint $table) {
            $table->id('id');
            $table->string('nome')->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro');
            $table->string('numero', 5);
            $table->string('rua');
            $table->char('cep', 9)->nullable();
            $table->unsignedBigInteger('id_client')->nullable();
            $table->unsignedBigInteger('id_commerce')->nullable();

            $table->foreign('id_client')->references('id')->on('Clients');
            $table->foreign('id_commerce')->references('id')->on('Commerces');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Addresses');
    }
};
