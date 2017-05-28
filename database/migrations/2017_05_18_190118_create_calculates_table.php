<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalculatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calculates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('vehiclename');
            $table->integer('excesshours');
            $table->integer('basiccharge');
            $table->integer('extracharge');
            $table->integer('totalcharge');
            $table->timestamps();

    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('calculates');
    }
}
