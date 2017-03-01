<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function assignments()
    {
        return $this->hasMany(Assignment::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }
}

