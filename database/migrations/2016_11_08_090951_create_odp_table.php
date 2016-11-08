<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOdpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odp', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_odp');
            $table->string('alamat_odp');
            $table->integer('id_sto')->unsigned();
            $table->foreign('id_sto')->references('id')->on('sto');
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
        Schema::dropIfExists('odp');
    }
}
