<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('barang_name');
            $table->integer('price')->unsigned()->default(0);
            $table->string('information');
            $table->integer('stock')->unsigned()->default(0);
            $table->integer('category_barang_id')->unsigned();
            $table->integer('created_on')->nullable();
            $table->integer('updated_on')->nullable();
            
            $table->foreign('category_barang_id')->references('id')->on('category_barangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
}
