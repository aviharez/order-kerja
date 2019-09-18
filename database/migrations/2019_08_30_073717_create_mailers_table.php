<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMailersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::connection('mysql3')->create('mailers', function (Blueprint $table) {
        //     $table->bigInteger('id')->primary();
        //     $table->string('alamat',100);
        //     $table->string('topik',200);
        //     $table->text('isi');
        //     $table->enum('status',['2','1','0']);
        //     $table->string('attachment');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       // Schema::connection('mysql3')->dropIfExists('mailers');
    }
}
