<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::connection('mysql')->create('orders', function (Blueprint $table) {
        //     $table->increments('id')->primary();
        //     $table->string('employee_id');
        //     $table->string('unit');
        //     $table->string('priority');
        //     $table->string('kd_mesin');
        //     $table->string('description');
        //     $table->string('executor_id');
        //     $table->string('category');
        //     $table->string('penghentian')->nullable();
        //     $table->string('ketentuan')->nullable();
        //     $table->string('status');
        //     $table->timestamps();

        //     $table->foreign('employee_id')
        //           ->reference('id')->on('pegawai')
        //           ->onDelete('cascade')->onUpdate('cascade');

        //     $table->foreign('executor_id')
        //           ->reference('id')->on('executors')
        //           ->onUpdate('cascade')->onDelete('cascade');

            
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::connection('mysql')->dropIfExists('orders');
    }
}
