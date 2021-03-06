<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(hatchbackTableSeeder::class);
        $this->call(hatchbackTableSeeder::class);
        $this->call(gearTableSeeder::class);
        $this->call(sedanTableSeeder::class);
        $this->call(suvTableSeeder::class);
        
    }
}
