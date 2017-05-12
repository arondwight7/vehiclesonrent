<?php

use Illuminate\Database\Seeder;

class suvTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suv= new \App\suv([
        	'imagepath' => 'images/fortuner.png',
        	'vehiclename' => 'Toyota Fortuner',
        	'transmission' => 'Manual',
        	'fuel' => 'Diesel',
        	'seats' => 'Eight',
        	'price' => '2630',
            'availability' => '3'
        	]);
        $suv->save();

        $suv= new \App\suv([
        	'imagepath' => 'images/safari.png',
        	'vehiclename' => 'Tata Safari',
        	'transmission' => 'Manual',
        	'fuel' => 'Diesel',
        	'seats' => 'Eight',
        	'price' => '2630',
            'availability' => '2'
        	]);
        $suv->save();

        $suv= new \App\suv([
        	'imagepath' => 'images/scorpio.png',
        	'vehiclename' => 'Mahindra Scorpio',
        	'transmission' => 'Manual',
        	'fuel' => 'Petrol',
        	'seats' => 'Eight',
        	'price' => '2630',
            'availability' => '2'
        	]);
        $suv->save();

        $suv= new \App\suv([
        	'imagepath' => 'images/xuv.png',
        	'vehiclename' => 'Mahindra XUV',
        	'transmission' => 'Automatic',
        	'fuel' => 'Petrol',
        	'seats' => 'Eight',
        	'price' => '2630',
            'availability' => '3'
        	]);
        $suv->save();

        
    }
}
