<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destination', function (Blueprint $table) {
            $table->increments('id_destination');
            $table->string('gambar_destination');
            $table->string('nama_destination');
            $table->integer('rating_destination');
            $table->integer('harga_tiket');
            $table->string('deskripsi_destination');
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
        Schema::dropIfExists('destination');
    }
}
