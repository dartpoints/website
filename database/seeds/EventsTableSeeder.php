<?php

use App\User;
use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    User::find(1)->events()->create([
      'name' => 'Study in Berry-Baker Library',
      'description' => 'Take the time to study in the Berry-Baker and earn dartpoints!',
      'location' => 'Lobby of Berry-Baker Library',
      'times' => 'Any time!'
    ]);
  }
}
