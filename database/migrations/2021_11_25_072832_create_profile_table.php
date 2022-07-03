<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('id_profile');
            $table->unsignedBigInteger('id_user');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('tempat_lahir', 75);
            $table->date('tanggal_lahir');
            $table->string('nisn', 30);
            $table->string('alamat', 80);
            $table->string('no_telp', 20);
            $table->string('nama_ayah', 75);
            $table->string('pekerjaan_ayah', 75);
            $table->string('nama_ibu', 75);
            $table->string('pekerjaan_ibu', 75);
            $table->year('tahun_masuk');
            $table->year('tahun_lulus');
            $table->string('no_ijazah', 75);
            $table->string('no_skhun', 75);
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
}
