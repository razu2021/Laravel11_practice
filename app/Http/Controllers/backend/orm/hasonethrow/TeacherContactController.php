<?php

namespace App\Http\Controllers\backend\orm\hasonethrow;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\TeacherContact;

class TeacherContactController extends Controller
{
    public function index(){
        $all = TeacherContact::get();
        return view('backend.orm.studentinfo.TeacherContact.index',compact('all'));
    }

    public function add(){
        $all = Teacher::get(); 
        return view('backend.orm.studentinfo.TeacherContact.add',compact('all'));
    }
    public function view(){
        return view('backend.orm.studentinfo.TeacherContact.view');
    }
    public function edit(){
        return view('backend.orm.studentinfo.TeacherContact.edit');
    }




    public function insert(Request $request){
       // dd($request);
        $insert = TeacherContact::create([
            'teacher_unique_id' => $request->teacher_id,
            'teacher_phone' => $request->teacher_phone,
            'teacher_email' => $request->teacher_email,
        ]);



   
    if ($insert) {
        flash()->success('Your Information Submited !');
    } else {
        flash()->error('Your Information submitted Faield !.');
    }
    return redirect()->back();
    


    }
}
