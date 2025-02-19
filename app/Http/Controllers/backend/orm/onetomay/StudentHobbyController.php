<?php

namespace App\Http\Controllers\backend\orm\onetomay;

use App\Http\Controllers\Controller;
use App\Models\studentHobby;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentHobbyController extends Controller
{


    public function index(){
        $studentid = Student::first('student_id',2);
        dd($studentid);
    }
















    public function insert(Request $request){
        $studentId = $request->student_unique_id;
  
        $insert = studentHobby::create([
           
            'student_unique_id'=>$studentId,
            'hobby'=>$request->student_hobby,
        ]);

    }






}   
