<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded = [];

    public function beers()
    {
      return $this->hasMany(Beer::class);
    }

}
