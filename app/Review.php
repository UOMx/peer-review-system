<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function submission()
    {
        return $this->belongsTo(Submission::class);
    }

    public function marks()
    {
        return $this->hasOne(Marks::class);
    }
}
