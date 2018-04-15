<?php

use App\House;
use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      House::create(['name' => 'Allen House']);
      House::create(['name' => 'East Wheelock House']);
      House::create(['name' => 'North Park House']);
      House::create(['name' => 'School House']);
      House::create(['name' => 'South House']);
      House::create(['name' => 'West House']);
    }
}
