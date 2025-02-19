<?php

namespace App\Http\Controllers\backend\orm\onetoone;

use App\Http\Controllers\Controller;
use App\Models\StudentContact;
use Illuminate\Http\Request;


class StudentcontactController extends Controller
{
    //

















    // insert method 

    public function insert(Request $request){

        $studentId = $request->student_unique_id;
        

        $insert= StudentContact::create([

            'student_unique_id'=>$studentId,
            'phone'=>$request->phone,
            'email'=>$request->email,
        ]);
    }







    
}
