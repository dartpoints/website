<?php

use App\Event;
use Illuminate\Database\Seeder;

class CodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::find(1)->codes()->create([
            'code' => '6D2D75B3D5EC473C3387'
        ]);

        Event::find(1)->codes()->create([
            'code' => '19F3EBF3AD6C4972FB2D'
        ]);
    }
}
