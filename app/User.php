<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
        /**
     * Get the beers for the user.
     */
    public function beers()
    {
        return $this->hasMany(Beer::class);
    }
}
