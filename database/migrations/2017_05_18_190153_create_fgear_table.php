<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFgearTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gears', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('imagepath');
            $table->string('vehiclename');
            $table->string('transmission');
            $table->string('seats');
            $table->string('price');
            $table->string('deposit');
            $table->string('excessph');
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
