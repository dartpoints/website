<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
      'code', 'claimed', 'event_id'
    ];

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $hidden = [

    ];

    /**
     * Get the event that owns the claim.
     */
    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    /**
     * Get the claim for this code.
     */
    public function claim()
    {
        return $this->hasOne(Claim::class);
    }
}
