<?php

namespace App\Http\Controllers\backend\setting;

use App\Http\Controllers\Controller;
use App\Models\emailSetting;
use Illuminate\Http\Request;

class EmailSettingController extends Controller
{
    public function index(){
        $all = emailSetting::get();
        return view('backend.setting.email.index',compact('all'));
    }
    public function add(){
        return view('backend.setting.email.add');
    }
    public function view(){
        return view('backend.setting.email.view');
    }
    public function edit(){
        return view('backend.setting.email.edit');
    }
    public function insert(Request $request){
        
        $insert= emailSetting::create([

            'mail_mailer'=>$request->mail_mailer,
            'mail_host'=>$request->mail_host,
            'mail_port'=>$request->mail_port,
            'mail_username'=>$request->mail_username,
            'mail_password'=>$request->mail_password,
            'mail_encryption'=>$request->mail_encryption,
            'mail_from_address'=>$request->mail_from_address,
            'mail_from_name'=>$request->mail_from_name,
        ]);

        if($insert){
            flash()->success('Mail Credentials upload Successfuly ');
        }else{
            flash()->success('Mail Credentials upload Faild ! ');
        }
        
        return back();




    }
    public function update(){
        

    }







    
}
