<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function rubric()
    {
        return $this->hasOne(Rubric::class);
    }

    public function submissions(){
        return $this->hasMany(Submission::class);
    }
}
