<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
      'name', 'description', 'date', 'location', 'user_id', 'points', 'footnote', 'image'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'claimable_at',
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
    * Get the codes for the event.
    */
    public function codes()
    {
      return $this->hasMany(Code::class);
    }

}
