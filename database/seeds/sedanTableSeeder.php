<?php

use Illuminate\Database\Seeder;

class sedanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $sedan= new \App\sedan([
        	'imagepath' => 'images/amaze.png',
        	'vehiclename' => 'Honda Amaze',
        	'transmission' => 'Manual',
        	'fuel' => 'Diesel',
        	'seats' => 'Five',
        	'price' => '1870',

        	]);
        $sedan->save();

        $sedan= new \App\sedan([
        	'imagepath' => 'images/ciaz.png',
        	'vehiclename' => 'Maruti Ciaz',
        	'transmission' => 'Manual',
        	'fuel' => 'Diesel',
        	'seats' => 'Five',
        	'price' => '1870',

        	]);
        $sedan->save();

        $sedan= new \App\sedan([
        	'imagepath' => 'images/amaze.png',
        	'vehiclename' => 'Honda Amaze',
        	'transmission' => 'Manual',
        	'fuel' => 'Petrol',
        	'seats' => 'Five',
        	'price' => '1870',

        	]);
        $sedan->save();

        $sedan= new \App\sedan([
        	'imagepath' => 'images/etios.png',
        	'vehiclename' => 'Toyota Etios',
        	'transmission' => 'Automatic',
        	'fuel' => 'Petrol',
        	'seats' => 'Five',
        	'price' => '1870',

        	]);
        $sedan->save();

        
    }
}
