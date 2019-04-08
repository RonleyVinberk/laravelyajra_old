<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsForPembeliansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pembelians', function (Blueprint $table) {
            $table->integer('jumlah_barang')->unsigned()->default(0)->after('keterangan_permintaan');
            $table->integer('total_harga')->unsigned()->default(0)->after('jumlah_barang')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
