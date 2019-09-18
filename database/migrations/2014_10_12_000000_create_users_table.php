<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::connection('mysql')->create('users', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('username')->unique();
        //     $table->string('password');
        //     $table->string('unit_name');
        //     $table->rememberToken();
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
       //Schema::connection('mysql')->dropIfExists('users');
    }
}
