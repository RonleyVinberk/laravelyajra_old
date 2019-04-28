<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelians', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('barang_id')->unsigned();
            $table->string('nomor_pembelian')->nullable();
            $table->string('keterangan_permintaan')->nullable();
            $table->integer('jumlah_barang')->unsigned()->default(0);
            $table->integer('jumlah_harga')->unsigned()->default(0)->nullable();
            $table->integer('created_on')->nullable();
            $table->integer('updated_on')->nullable();

            $table->foreign('barang_id')->references('id')->on('barangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelians');
    }
}
