<?php

namespace App\Http\Controllers\backend\orm\manytomany;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class StudentCourseController extends Controller
{
    //




    public function view($id){

        $alldata = Course::where('course_id',$id)
        ->with('students')
        ->get();
        dd($alldata);

    }
}
