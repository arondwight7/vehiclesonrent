<?php

use Illuminate\Database\Seeder;

class gearTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gear= new \App\gear([
        	'imagepath' => 'images/activa.png',
        	'vehiclename' => 'Honda Activa',
        	'transmission' => 'Automatic',
        	'seats' => 'two',
        	'price' => '1340',

        	]);
        $gear->save();

        $gear= new \App\gear([
        	'imagepath' => 'images/avengers.png',
        	'vehiclename' => 'Bajaj Avengers',
        	'transmission' => 'Gear',
        	'seats' => 'two',
        	'price' => '1680',

        	]);
        $gear->save();

        $gear= new \App\gear([
        	'imagepath' => 'images/cbr.png',
        	'vehiclename' => 'Honda CBR',
        	'transmission' => 'Gear',
        	'seats' => 'two',
        	'price' => '1680',

        	]);
        $gear->save();

		$gear= new \App\gear([
        	'imagepath' => 'images/dio.png',
        	'vehiclename' => 'Honda Dio',
        	'transmission' => 'Automatic',
        	'seats' => 'two',
        	'price' => '1340',

        	]);
        $gear->save();


        $gear= new \App\gear([
        	'imagepath' => 'images/pep.png',
        	'vehiclename' => 'TVS Pep',
        	'transmission' => 'Automatic',
        	'seats' => 'two',
        	'price' => '1340',

        	]);
        $gear->save();

        $gear= new \App\gear([
        	'imagepath' => 'images/pulsar.png',
        	'vehiclename' => 'Bajaj Pulsar',
        	'transmission' => 'Gear',
        	'seats' => 'two',
        	'price' => '1680',

        	]);
        $gear->save();

        $gear= new \App\gear([
        	'imagepath' => 'images/shine.png',
        	'vehiclename' => 'Honda Shine',
        	'transmission' => 'Gear',
        	'seats' => 'two',
        	'price' => '1680',

        	]);
        $gear->save();

		$gear= new \App\gear([
        	'imagepath' => 'images/wego.png',
        	'vehiclename' => 'TVS Wego',
        	'transmission' => 'Automatic',
        	'seats' => 'two',
        	'price' => '1340',

        	]);
        $gear->save();


    }
}
