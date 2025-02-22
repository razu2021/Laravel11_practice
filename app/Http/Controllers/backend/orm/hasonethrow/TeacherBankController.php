<?php

namespace App\Http\Controllers\backend\orm\hasonethrow;

use App\Http\Controllers\Controller;
use App\Models\Teacher_bank;
use Illuminate\Http\Request;
use App\Models\teacher;

class TeacherBankController extends Controller
{
    public function index(){
        $all = Teacher_bank::get();
        return view('backend.orm.studentinfo.Teacher_bank.index',compact('all'));
    }

    public function add(){
        $all = Teacher::get(); 

        return view('backend.orm.studentinfo.Teacher_bank.add',compact('all'));
    }
    public function view(){
        return view('backend.orm.studentinfo.Teacher_bank.view');
    }
    public function edit(){
        return view('backend.orm.studentinfo.Teacher_bank.edit');
    }




    public function insert(Request $request){
       // dd($request);
        $insert = Teacher_bank::create([
            'teacher_unique_id' => $request->teacher_id,
            'bank_name' => $request->bank_name,
            'account_number' => $request->account_number,
        ]);



   
    if ($insert) {
        flash()->success('Your Information Submited !');
    } else {
        flash()->error('Your Information submitted Faield !.');
    }
    return redirect()->back();
    


    }
}
