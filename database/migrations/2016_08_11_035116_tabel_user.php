<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('user_id');
            $table->integer('grup_id')->unsigned();
            $table->foreign('grup_id')->references('user_id')->on('grup');
            $table->string('nama');
            $table->string('username');
            $table->string('password');
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user');
    }
}
