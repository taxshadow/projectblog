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
            $table->integer('penulis');
            $table->string('gambar');
            $table->integer('kategori_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
