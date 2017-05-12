<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suvs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('imagepath');
            $table->string('vehiclename');
            $table->string('transmission');
            $table->string('fuel');
            $table->string('seats');
            $table->string('price');
            $table->integer('availability');
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
