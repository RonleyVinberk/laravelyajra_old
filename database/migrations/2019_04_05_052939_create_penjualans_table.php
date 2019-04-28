<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomor_penjualan', 25);
            $table->integer('jumlah_barang')->unsigned()->default(0);
            $table->integer('jumlah_harga')->unsigned()->default(0)->nullable();
            $table->integer('kupon_id')->unsigned()->nullable();
            $table->integer('barang_id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->integer('created_on')->nullable();
            $table->integer('updated_on')->nullable();

            $table->foreign('kupon_id')->references('id')->on('kupons')->onDelete('cascade');
            $table->foreign('barang_id')->references('id')->on('barangs')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualans');
    }
}
