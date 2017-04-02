<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getCourse($id){
        return view('course',compact('id'));
    }
}
