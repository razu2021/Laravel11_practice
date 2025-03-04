<?php

namespace App\Http\Controllers\backend\common;

use App\Http\Controllers\Controller;
use App\Models\PostComponent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Gate;

class PostComponentController extends Controller
{

    public function index(){
       
        $all = PostComponent::get();
    
        return view('backend.common.post_component.index',compact('all'));
    }

    public function add(){
        return view ('backend.common.post_component.add');
    }

    public function view($id){
    
            if(Gate::allows('isUserid')){
                $alldata = PostComponent::where('id',$id)->firstOrFail();
           
                return view ('backend.common.post_component.view',compact('alldata'));
            }else{
                return abort(403);
            }
    }




    public function edit(PostComponent $postComponent)
    {
        //dd($postComponent);
        return view('backend.common.post_component.edit', compact('postComponent'));
    }
    






    

    public function insert(Request $request){
        $request->validate([
            'post_title'=> 'required' ,
            'post_desc'=> 'required' ,
            
        ]);

        $creator = Auth::User()->id;

        $insert = PostComponent::create([
            'post_title'=>$request->post_title,
            'post_desc'=>$request->post_desc,
            'creator'=>$creator,
        ]);


        if($insert){
            Session::flash('success_messages','Post submitted successfully!');
        }else{
            Session::flash('error_messages','Post submitted Faild!');
        }
        return back();



    }








}
