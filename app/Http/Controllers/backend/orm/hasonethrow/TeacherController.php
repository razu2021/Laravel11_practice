<?php

namespace App\Http\Controllers\backend\orm\hasonethrow;

use App\Http\Controllers\Controller;
use App\Models\university;
use Illuminate\Http\Request;
use App\Models\teacher;

class TeacherController extends Controller
{
    
    public function index(){
        $all = teacher::get();
        return view('backend.orm.studentinfo.teacher.index',compact('all'));
    }

    public function add(){
        $all = university::get();
        return view('backend.orm.studentinfo.teacher.add',compact('all'));
    }
    public function view(){
        return view('backend.orm.studentinfo.teacher.view');
    }
    public function edit(){
        return view('backend.orm.studentinfo.teacher.edit');
    }




    public function insert(Request $request){
       // dd($request);
        $insert = teacher::create([
            'university_unique_id' => $request->university_id,
            'teacher_name' => $request->teacher_name,
        ]);



   
    if ($insert) {
        flash()->success('Your Information Submited !');
    } else {
        flash()->error('Your Information submitted Faield !.');
    }
    return redirect()->back();
    


    }


    
}
