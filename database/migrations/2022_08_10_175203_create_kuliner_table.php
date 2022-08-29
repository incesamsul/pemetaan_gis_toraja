<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKulinerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuliner', function (Blueprint $table) {
            $table->increments('id_kuliner');
            $table->string('gambar_kuliner');
            $table->string('nama_kuliner');
            $table->string('link_website');
            $table->integer('rating_kuliner');
            $table->integer('harga');
            $table->string('alamat');
            $table->string('deskripsi_kuliner', 5000);
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
        Schema::dropIfExists('kuliner');
    }
}
