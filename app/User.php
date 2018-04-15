<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use Notifiable;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'name', 'email', 'password', 'house_id'
  ];

  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
  protected $hidden = [
    'password', 'remember_token',
  ];

  /**
  * Get the claims for the user.
  */
  public function claims()
  {
    return $this->hasMany(Claim::class);
  }

  /**
  * Get the events for the user.
  */
  public function events()
  {
    return $this->hasMany(Event::class);
  }

  /**
   * Get the house that owns the user.
   */
  public function house()
  {
      return $this->belongsTo(House::class);
  }

  /**
   * Get the user's total points.
   *
   * @param  string  $value
   * @return string
   */
  public function getPointsAttribute()
  {
      return $this->claims->reduce(function($c, $i) {
        return $c + $i->code->event->points;
      }) ?? 0;
  }
}
