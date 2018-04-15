<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name'
    ];

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $hidden = [

    ];

    /**
    * Indicates if the model should be timestamped.
    *
    * @var bool
    */
    public $timestamps = false;

    /**
    * Get the users for the house.
    */
    public function users()
    {
        return $this->hasMany(User::class);
    }

    /**
    * Get the claims for the house.
    */
    public function claims()
    {
        return $this->hasMany(Claim::class);
    }

    /**
    * Get the house's total points.
    *
    * @param  string  $value
    * @return string
    */
    public function getPointsAttribute()
    {
        $points = $this->claims->reduce(function($c, $i) {
            return $c + $i->code->event->points;
        }) ?? 0;

        return $points . ' point' . ($points !== 1 ? 's' : '');
    }
}
