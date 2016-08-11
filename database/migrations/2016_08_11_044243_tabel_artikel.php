<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelArtikel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->increments('artikel_id');
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('slug');
            $table->dateTime('tgl_publish');
            $table->integer('penulis')->unsigned();
            $table->foreign('user_id')->references('artikel_id')->on('user');
            $table->string('gambar');
            $table->integer('kategori_id')->unsigned();
            $table->foreign('kategori_id')->references('artikel_id')->on('kategori');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('artikel');
    }
}
