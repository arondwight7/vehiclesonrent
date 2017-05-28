<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('dl');
            $table->string('vehicletaken');
            $table->string('bprice');
            $table->string('deposit');
            $table->string('excessph');
            $table->string('excessh');
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
