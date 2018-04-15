<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'points', 'user_id', 'house_id'
  ];

  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
  protected $hidden = [

  ];

  /**
   * Get the user that owns the claim.
   */
  public function user()
  {
      return $this->belongsTo(User::class);
  }

  /**
   * Get the house that owns the claim.
   */
  public function house()
  {
      return $this->belongsTo(House::class);
  }
}
