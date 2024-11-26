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
        Schema::table('perumahan', function (Blueprint $table) {
            //
            $table->string('posisi')->nullable()->after('unit'); // Sesuaikan kolom sebelum `after` dengan kolom terakhir pada tabel
            $table->string('no_kavling')->nullable()->after('posisi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('perumahan', function (Blueprint $table) {
            //
            $table->dropColumn(['posisi', 'no_kavling']);
        });
    }
};
