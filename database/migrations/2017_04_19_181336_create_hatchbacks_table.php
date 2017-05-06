<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHatchbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hatchbacks', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('imagepath');
            $table->string('vehiclename');
            $table->string('transmission');
            $table->string('fuel');
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
        Schema::drop('hatchbacks');
    }
}
