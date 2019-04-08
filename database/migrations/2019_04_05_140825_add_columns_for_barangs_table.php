<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsForBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('barangs', function (Blueprint $table) {
            $table->integer('kupon_id')->nullable()->unsigned()->after('stock');
            $table->integer('diskon_id')->nullable()->unsigned()->after('kupon_id');
            $table->integer('supplier_id')->unsigned()->after('diskon_id');
            $table->integer('harga_beli')->unsigned()->default(0)->after('stock');

            $table->foreign('kupon_id')->references('id')->on('kupons')->onDelete('cascade');
            $table->foreign('diskon_id')->references('id')->on('diskons')->onDelete('cascade');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');
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
