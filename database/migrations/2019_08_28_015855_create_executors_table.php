<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExecutorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::connection('mysql')->create('executors', function (Blueprint $table) {
        //     $table->string('id')->primary();
        //     $table->string('nama',50);
        //     $table->string('category');
        //     $table->string('pic')->nullable();
        //     $table->string('email',20)->nullable();
        //     $table->string('no_telp',20)->nullable();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       // Schema::connection('mysql')->dropIfExists('executors');
    }
}
