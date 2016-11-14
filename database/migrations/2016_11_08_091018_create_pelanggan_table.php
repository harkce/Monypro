<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pelanggan');
            $table->string('alamat_pelanggan');
            $table->string('noHP');
            $table->string('typeRumah');
            $table->string('kendaraan');
            $table->string('pengeluaranInet');
            $table->string('jarakODP');
            $table->string('ket');
            $table->string('permintaan');
            $table->string('dataPel');
            $table->integer('jmlPengguna');
            $table->integer('id_status')->unsigned();
            $table->foreign('id_status')->references('id')->on('status');
            $table->integer('id_uie')->unsigned();
            $table->foreign('id_uie')->references('id')->on('uie');
            $table->integer('id_user_tv')->unsigned();
            $table->foreign('id_user_tv')->references('id')->on('user_tv');
            $table->integer('id_odp')->unsigned();
            $table->foreign('id_odp')->references('id')->on('odp');
            $table->integer('id_pegawai')->unsigned();
            $table->foreign('id_pegawai')->references('id')->on('pegawai');
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
        Schema::dropIfExists('pelanggan');
    }
}
