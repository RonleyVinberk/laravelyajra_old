<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiskonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diskons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jumlah')->unsigned()->default(0);
            $table->integer('created_on')->nullable();
            $table->integer('updated_on')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diskons');
    }
}
