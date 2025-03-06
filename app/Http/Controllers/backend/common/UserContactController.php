<?php

namespace App\Http\Controllers\backend\common;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Models\UserContact;
use Illuminate\Http\Request;
use App\Jobs\usercontactjob;

class UserContactController extends Controller
{

public function index(){
    $all = UserContact::get();
    return view('backend.common.usercontact.index',compact('all'));
}
public function add(){
    return view('backend.common.usercontact.add');
}








public function insert(Request $request){


    $insert = UserContact::create([
        'user_name'=>$request->user_name,
        'user_email'=>$request->user_email,
        'user_phone'=>$request->user_phone,
        'subject'=>$request->subject,
        'messages'=>$request->messages,
    ]);


    if($insert){
        Session::flash('success_messages','Post submitted successfully!');
    }else{
        Session::flash('error_messages','Post submitted Faild!');
    }

    /** ---- send a email to admin or author ---- */
    $mailto = "mdrazuhossainraj@gmail.com";
   



    return back();

}



}
