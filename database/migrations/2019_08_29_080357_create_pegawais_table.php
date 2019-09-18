<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::connection('mysql2')->create('pegawai', function (Blueprint $table) {
        //     $table->string('no_badge')->primary();
        //     $table->string('nama');
        //     $table->string('kd_pusat_biaya');
        //     $table->string('org_name');
        //     $table->string('unit_kerja');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::connection('mysql2')->dropIfExists('pegawai');
    }
}
