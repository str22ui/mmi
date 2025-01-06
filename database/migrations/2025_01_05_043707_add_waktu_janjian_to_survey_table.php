<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWaktuJanjianToSurveyTable extends Migration
{
    public function up()
    {
        Schema::table('survey', function (Blueprint $table) {
            $table->time('waktu_janjian')->nullable()->after('tanggal_janjian');
        });
    }

    public function down()
    {
        Schema::table('survey', function (Blueprint $table) {
            $table->dropColumn('waktu_janjian');
        });
    }
}

