<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
     /**
     * Get the user that owns the beer.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
