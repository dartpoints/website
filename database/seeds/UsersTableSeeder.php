<?php

use App\House;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        House::find(5)->users()->create([
          'name' => 'Evelina Stoikou',
          'email' => 'evelina@dartmouth.edu',
          'password' => bcrypt('123456')
        ]);
    }
}
