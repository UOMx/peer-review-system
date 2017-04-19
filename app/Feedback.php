<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }

    public function review()
    {
        return $this->hasOne(Review::class);
    }
}
