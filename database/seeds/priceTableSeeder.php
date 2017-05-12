<?php

use Illuminate\Database\Seeder;

class priceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $price= new \App\price([
            'vehiclename' => 'Maruti Swift',
            'price' => '1200',
            'excesspricephour' => '170'

            ]);
        $price->save();

        $price= new \App\price([
            'vehiclename' => 'Hyundai i10',
            'price' => '1100',
            'excesspricephour' => '170'

            ]);
        $price->save();


        $price= new \App\price([
            'vehiclename' => 'Ford Figo',
            'price' => '1250',
            'excesspricephour' => '170'

            ]);
        $price->save();


        $price= new \App\price([
            'vehiclename' => 'Honda Jazz',
            'price' => '1350',
            'excesspricephour' => '170'

            ]);
        $price->save();


        $price= new \App\price([
            'vehiclename' => 'Honda Amaze',
            'price' => '1870',
            'excesspricephour' => '230'

            ]);
        $price->save();


        $price= new \App\price([
            'vehiclename' => 'Maruti Ciaz',
            'price' => '1720',
            'excesspricephour' => '230'

            ]);
        $price->save();


        $price= new \App\price([
            'vehiclename' => 'Toyota Etios',
            'price' => '1750',
            'excesspricephour' => '230'

            ]);
        $price->save();

$price= new \App\price([
            'vehiclename' => 'Toyota Fortuner',
            'price' => '2230',
            'excesspricephour' => '280'

            ]);
        $price->save();

$price= new \App\price([
            'vehiclename' => 'Tata Safari',
            'price' => '2050',
            'excesspricephour' => '280'

            ]);
        $price->save();

$price= new \App\price([
            'vehiclename' => 'Mahindra Scorpio',
            'price' => '2100',
            'excesspricephour' => '280'

            ]);
        $price->save();

$price= new \App\price([
            'vehiclename' => 'Mahindra XUV',
            'price' => '2130',
            'excesspricephour' => '280'

            ]);
        $price->save();

$price= new \App\price([
            'vehiclename' => 'Honda Activa',
            'price' => '760',
            'excesspricephour' => '100'

            ]);
        $price->save();

$price= new \App\price([
            'vehiclename' => 'Bajaj Avengers',
            'price' => '890',
            'excesspricephour' => '100'

            ]);
        $price->save();

$price= new \App\price([
            'vehiclename' => 'Honda CBR',
            'price' => '920',
            'excesspricephour' => '100'

            ]);
        $price->save();

$price= new \App\price([
            'vehiclename' => 'Honda Dio',
            'price' => '740',
            'excesspricephour' => '100'

            ]);
        $price->save();

$price= new \App\price([
            'vehiclename' => 'TVS Pep',
            'price' => '680',
            'excesspricephour' => '100'

            ]);
        $price->save();

$price= new \App\price([
            'vehiclename' => 'Bajaj Pulsar 150',
            'price' => '850',
            'excesspricephour' => '100'

            ]);
        $price->save();

$price= new \App\price([
            'vehiclename' => 'Honda Shine',
            'price' => '840',
            'excesspricephour' => '100'

            ]);
        $price->save();

$price= new \App\price([
            'vehiclename' => 'TVS Wego',
            'price' => '710',
            'excesspricephour' => '100'

            ]);
        $price->save();


    }
}
