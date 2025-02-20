<?php

namespace App\Http\Controllers\backend\orm;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\course_student;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class studentController extends Controller
{
  /** ---- index page functionality ---- */
  public function addinfo(){
    
    return view('backend.orm.studentinfo.student.addinfo');
  }
  public function index(){
    $all = Student::get();
     return view('backend.orm.studentinfo.student.index',compact('all'));
  }
  /** ---- index page functionality ---- */
  public function add(){
     return view('backend.orm.studentinfo.student.add');
  }
  /** ---- index page functionality ---- */
  public function view($id){
   $allcourse = Course::get();
    $alldata = Student::where('student_id',$id)->with([
      'student_contact',
      'student_hobby',
      'courses'
    ])->firstOrFail();
    
    //dd($alldata);
     return view('backend.orm.studentinfo.student.view',compact('alldata','allcourse'));
  }
  /** ---- index page functionality ---- */
  public function edit(){
     return view('backend.orm.studentinfo.student.edit');
  }



  /** ---- index page functionality ---- */
  public function insert(Request $request){
     
    $slugs = Str::random(20) . '_'.mt_rand(10000, 100000).'-'.time();
    $creator_id = Auth::User()->id;

    $insert = Student::create([
      'student_name'=> $request->student_name,
      'father_name'=> $request->father_name,
      'mother_name'=> $request->mother_name,
      'birth_date'=> $request->birth_date,
      'slug'=> $slugs,
      'creator'=> $creator_id,
    
    ]);


    // insert statement
    if ($insert) {
        flash()->success('Your Information Submited !');
    } else {
        flash()->error('Your Information submitted Faield !.');
    }

    return redirect()->back();


  }

/**  add courses  */
  public function course(Request $request){
      
   $insert = course_student::create([
      'student_uniuqe_id'=>$request->student_unique_id,
      'course_unique_id'=>$request->course_id,
   ]);
   return ;


  }















   /**========  soft Delete Functionality ======== */
   public function softdelete($id){

    $delete = Student::where('student_id',$id);
    $delete->delete();

    if ($delete) {
       flash()->success('Your Information Delete Successfuly !');
    } else {
       flash()->error('Your Information Delete Faield !.');
    }

    return redirect()->back();
   
 }
 /**========  Restore Data Functionality ======== */
 public function restore($id){

    $restoreData = Student::where('student_id',$id);
    $restoreData->restore();

    if ($restoreData) {
       flash()->success(' Data Restore Successfuly !');
    } else {
       flash()->error(' Data Restore  Faield !.');
    }
    return redirect()->back();
   
 }
 /**========  Delete  Data Functionality ======== */
 public function delete($id){

    $deleteData = Student::onlyTrashed()->where('student_id', $id);
    $deleteData->forceDelete();

    if ($deleteData){
       flash()->success('Delete Data Successfuly !');
    } else {
       flash()->error('Delete Data Request Faield !.');
    }
    return redirect()->back();
   
 }





/**--------Recycle blade view -------- */
 public function recycle(){
    $all = Student::onlyTrashed()->get();
    return view('backend.orm.studentinfo.student.recycle',compact('all'));
 }

/**--------Recycle blade view -------- */





}
