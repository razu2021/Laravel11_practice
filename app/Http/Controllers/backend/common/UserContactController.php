<?php

namespace App\Http\Controllers\backend\common;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use App\Models\UserContact;
use Illuminate\Http\Request;
use App\Jobs\usercontactjob;
use App\Jobs\usercontactreplyjob;

class UserContactController extends Controller
{

public function index(){
    $all = UserContact::get();
    return view('backend.common.usercontact.index',compact('all'));
}
public function add(){
    return view('backend.common.usercontact.add');
}
public function edit($id){
    $data = UserContact::where('id',$id)->firstOrFail();
    return view('backend.common.usercontact.edit',compact('data'));
}
public function messages_reply($id){
    $data = UserContact::where('id',$id)->firstOrFail();
    $usermail = $data->user_email ;

    if (!empty($data->messages_reply) && !empty($data->user_email)) {
        dispatch(new usercontactreplyjob($data->user_email, $data)); // Ensure user_email is valid
    
        flash()->success('Messages Reply Sent Successfully');
    } else {
        flash()->error('Messages Reply has not been set!');
    }
  
    return back();




}










public function insert(Request $request){
    

    $insertData = UserContact::create([
        'user_name'=>$request->user_name,
        'user_email'=>$request->user_email,
        'user_phone'=>$request->user_phone,
        'subject'=>$request->subject,
        'messages'=>$request->messages,
    ]);
 
   /** file upload code  */
    $public_directory = public_path('uploads/user_contact/');
    if($request->hasFile('file')){
        $file = $request->file('file') ; // get mail file 
        $fileName ="user_contact".'-'.time().'_'.mt_rand(10000, 100000).'_'.$file->getClientOriginalName();
        $file->move($public_directory,$fileName); 

        UserContact::where('id',$insertData->id)->update([
            'file_name'=>$fileName,
        ]);
       
    }else{
        $fileName = null ;
    }


    
    if($insertData){
        Session::flash('success_messages','Post submitted successfully!');
    }else{
        Session::flash('error_messages','Post submitted Faild!');
    }

    /** ---- send a email to admin or author ---- */
    $mailto = "mdrazuhossainraj@gmail.com";
        dispatch(new usercontactjob($insertData->toArray(),$mailto,$fileName));
   



    return back();

}




public function update(Request $request){

    $id = $request->id;

    $updateData = UserContact::where('id',$id)->update([
        'messages_reply'=>$request->messages_reply,
    ]);


    if($updateData){
        Session::flash('success_messages','Post submitted successfully!');
    }else{
        Session::flash('error_messages','Post submitted Faild!');
    }

    return back();

}


}
