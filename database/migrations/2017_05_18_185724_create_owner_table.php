<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Owner', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->integer('phoneno');
            $table->string('address');
            $table->integer('pin');
            $table->string('city');
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
        //
    }
}
