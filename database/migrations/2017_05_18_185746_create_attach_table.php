<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttachTable extends Migration
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
            $table->string('vmake');
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
