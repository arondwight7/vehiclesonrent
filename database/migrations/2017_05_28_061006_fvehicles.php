<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fvehicles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Vehicles', function(Blueprint $table){
            $table->increments('id');
            $table->string('vregno');
            $table->string('vname');
            $table->string('vtype');
			$table->boolean('available');
            $table->string('vmake');
			$table->integer('oid');
            $table->integer('vcc');
            $table->string('vcat');
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
