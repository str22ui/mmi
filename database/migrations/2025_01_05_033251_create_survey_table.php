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
        Schema::create('survey', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nama_konsumen');
            $table->string('no_hp');
            $table->string('email')->nullable();
            $table->string('domisili');
            $table->string('pekerjaan');
            $table->string('nama_kantor')->nullable();
            $table->string('perumahan');
            $table->dateTime('tanggal_janjian'); // Untuk tanggal dan waktu
            $table->string('sumber_informasi');
            $table->unsignedBigInteger('agent_id'); // Foreign key
            $table->timestamps();

            // Tambahkan foreign key constraint jika tabel agents sudah ada
            $table->foreign('agent_id')->references('id')->on('agents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey');
    }
};
