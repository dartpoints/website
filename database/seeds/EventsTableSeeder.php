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
        'name' => 'Attend HackDartmouth!',
        'description' => 'Partake in very own local Hackathon and earn loads of dartpoints!',
        'location' => 'Thayer School of Engineering',
        'footnote' => 'Next week',
        'claimable_at' => \Carbon\Carbon::now(),
        'image' => 'TWVu2O8zYi',
        'points' => 100,
      ]);
      User::find(1)->events()->create([
        'name' => 'Study in Berry-Baker Library',
        'description' => 'Take the time to study in the Berry-Baker and earn dartpoints!',
        'location' => 'Berry-Baker Library Lobby',
        'footnote' => 'See librarians for your claim code.',
        'claimable_at' => \Carbon\Carbon::tomorrow(),
        'image' => 'xvxEIAP48v',
        'points' => 30,
      ]);
      User::find(1)->events()->create([
        'name' => 'Go to the Gym!',
        'description' => 'Take the time to go to the gym today and earn some dartpoints in return.',
        'location' => 'Dartmouth Alumni Gymnasium',
        'footnote' => 'Speak with the frontdesk for a code.',
        'claimable_at' => \Carbon\Carbon::now()->addDays(3),
        'image' => '3MM28cWnJG',
        'points' => 60
      ]);
      User::find(1)->events()->create([
        'name' => 'Women\'s Volleyball Game' ,
        'description' => 'Support our women\'s volleyball team and earn dartpoints!',
        'location' => 'Dartmouth Alumni Gymnasium',
        'footnote' => 'Next week. Codes will be given out.',
        'claimable_at' => \Carbon\Carbon::now()->addWeeks(1),
        'image' => 'nh5jJJYZJx',
        'points' => 50
      ]);

  }
}
