<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMopedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mopeds', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('imagepath');
            $table->string('vehiclename');
            $table->string('transmission');
            $table->string('seats');
            $table->string('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mopeds');
    }
}
