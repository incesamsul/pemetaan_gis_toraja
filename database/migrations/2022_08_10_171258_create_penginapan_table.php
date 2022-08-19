<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenginapanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penginapan', function (Blueprint $table) {
            $table->increments('id_penginapan');
            $table->string('gambar_penginapan');
            $table->string('nama_penginapan');
            $table->integer('rating_penginapan');
            $table->integer('harga_tiket');
            $table->string('deskripsi_penginapan', 5000);
            $table->string('link_pemetaan');
            $table->string('ket_pemetaan');
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
        Schema::dropIfExists('penginapan');
    }
}
