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
        Schema::create('konsumen', function (Blueprint $table) {
            $table->id();
            $table->string('nama_konsumen');
            $table->string('no_hp')->nullable();
            $table->string('domisili')->nullable(); // Luas dalam satuan meter persegi misalnya
            $table->string('email')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('nama_kantor')->nullable();
            $table->string('perumahan')->nullable();
            $table->string('sumber_informasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsumen');
    }
};
