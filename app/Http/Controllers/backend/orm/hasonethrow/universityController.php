<?php

namespace App\Http\Controllers\backend\orm\hasonethrow;

use App\Http\Controllers\Controller;
use App\Models\university;
use Illuminate\Http\Request;

class universityController extends Controller
{
    //
    public function index(){
        $all = university::with([
            'teachers',
            'TeacherContact',
            'TeacherBank'
        ])->get();
        //dd($all);
        return view('backend.orm.studentinfo.university.index',compact('all'));
    }

    public function add(){
        return view('backend.orm.studentinfo.university.add');
    }
    public function view(){
        return view('backend.orm.studentinfo.university.view');
    }
    public function edit(){
        return view('backend.orm.studentinfo.university.edit');
    }




    public function insert(Request $request){
        
        $insert = university::create([
            'university_name' => $request->university_name,
        ]);


    if ($insert) {
        flash()->success('Your Information Submited !');
    } else {
        flash()->error('Your Information submitted Faield !.');
    }
    return redirect()->back();
    


    }














}
