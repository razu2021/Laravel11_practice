<?php

namespace App\Http\Controllers\backend\common;

use App\Http\Controllers\Controller;
use App\Models\PostComponent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostComponentController extends Controller
{

    public function index(){

        $all = PostComponent::get();
     
        return view ('backend.common.post_component.index',compact('all'));
    }

    public function add(){
        return view ('backend.common.post_component.add');
    }


    

    public function insert(Request $request){
        $request->validate([
            'post_title'=> 'required' ,
            'post_desc'=> 'required' ,
            
        ]);


        $insert = PostComponent::create([
            'post_title'=>$request->post_title,
            'post_desc'=>$request->post_desc,
        ]);


        if($insert){
            Session::flash('success_messages','Post submitted successfully!');
        }else{
            Session::flash('error_messages','Post submitted Faild!');
        }
        return back();



    }








}
