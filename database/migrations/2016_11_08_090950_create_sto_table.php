<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_sto');
            $table->integer('id_kandatel')->unsigned();
            $table->foreign('id_kandatel')->references('id')->on('kandatel');
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
        Schema::dropIfExists('sto');
    }
}
