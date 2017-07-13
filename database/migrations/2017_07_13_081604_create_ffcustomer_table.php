<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFfcustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->integer('phoneno');
            $table->string('address');
            $table->string('vehicletaken');
            $table->string('bprice');
            $table->string('deposit');
            $table->string('excessph');
            $table->string('dl');
            $table->date('exp');
            $table->date('pick');
            $table->integer('picktime');
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
