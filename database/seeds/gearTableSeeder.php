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
        	'price' => '760',
            'deposit' => '5000',
            'excessph' => '100',
            'availability' => '4'

        	]);
        $gear->save();

        $gear= new \App\gear([
        	'imagepath' => 'images/avengers.png',
        	'vehiclename' => 'Bajaj Avengers',
        	'transmission' => 'Gear',
        	'seats' => 'two',
        	'price' => '890',
            'deposit' => '5000',
            'excessph' => '100',
            'availability' => '3'
        	]);
        $gear->save();

        $gear= new \App\gear([
        	'imagepath' => 'images/cbr.png',
        	'vehiclename' => 'Honda CBR 150',
        	'transmission' => 'Gear',
        	'seats' => 'two',
        	'price' => '920',
            'deposit' => '5000',
            'excessph' => '100',
            'availability' => '2'
        	]);
        $gear->save();

		$gear= new \App\gear([
        	'imagepath' => 'images/dio.png',
        	'vehiclename' => 'Honda Dio',
        	'transmission' => 'Automatic',
        	'seats' => 'two',
        	'price' => '740',
            'deposit' => '5000',
            'excessph' => '100',
            'availability' => '2'
        	]);
        $gear->save();


        $gear= new \App\gear([
        	'imagepath' => 'images/pep.png',
        	'vehiclename' => 'TVS Pep',
        	'transmission' => 'Automatic',
        	'seats' => 'two',
        	'price' => '680',
            'deposit' => '5000',
            'excessph' => '100',
            'availability' => '3'
        	]);
        $gear->save();

        $gear= new \App\gear([
        	'imagepath' => 'images/pulsar.png',
        	'vehiclename' => 'Bajaj Pulsar 150',
        	'transmission' => 'Gear',
        	'seats' => 'two',
        	'price' => '850',
            'deposit' => '5000',
            'excessph' => '100',
            'availability' => '4'
        	]);
        $gear->save();

        $gear= new \App\gear([
        	'imagepath' => 'images/shine.png',
        	'vehiclename' => 'Honda Shine',
        	'transmission' => 'Gear',
        	'seats' => 'two',
        	'price' => '840',
            'deposit' => '5000',
            'excessph' => '100',
            'availability' => '3'
        	]);
        $gear->save();

		$gear= new \App\gear([
        	'imagepath' => 'images/wego.png',
        	'vehiclename' => 'TVS Wego',
        	'transmission' => 'Automatic',
        	'seats' => 'two',
        	'price' => '710',
            'deposit' => '5000',
            'excessph' => '100',
            'availability' => '2'
        	]);
        $gear->save();


    }
}
