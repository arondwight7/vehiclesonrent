<?php

use Illuminate\Database\Seeder;

class hatchbackTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hatchback= new \App\hatchback([
        	'imagepath' => 'images/swift.png',
        	'vehiclename' => 'Maruti Swift',
        	'transmission' => 'Manual',
        	'fuel' => 'Diesel',
        	'seats' => 'Four',
        	'price' => '1250',
            'availability' => '4'

        	]);
        $hatchback->save();

        $hatchback= new \App\hatchback([
        	'imagepath' => 'images/jazz.png',
        	'vehiclename' => 'Honda Jazz',
        	'transmission' => 'Manual',
        	'fuel' => 'Diesel',
        	'seats' => 'Four',
        	'price' => '1250',
            'availability' => '4'
        	]);
        $hatchback->save();

        $hatchback= new \App\hatchback([
        	'imagepath' => 'images/figo.png',
        	'vehiclename' => 'Ford Figo',
        	'transmission' => 'Automatic',
        	'fuel' => 'Petrol',
        	'seats' => 'Four',
        	'price' => '1250',
            'availability' => '2'
        	]);
        $hatchback->save();

        $hatchback= new \App\hatchback([
        	'imagepath' => 'images/i10.png',
        	'vehiclename' => 'Hyundai i10',
        	'transmission' => 'Automatic',
        	'fuel' => 'Petrol',
        	'seats' => 'Four',
        	'price' => '1250',
            'availability' => '3'
        	]);
        $hatchback->save();
    }
}
