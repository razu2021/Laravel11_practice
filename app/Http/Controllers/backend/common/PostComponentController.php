<?php

namespace App\Http\Controllers\backend\common;

use App\Http\Controllers\Controller;
use App\Models\PostComponent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests; 

class PostComponentController extends Controller
{
    use AuthorizesRequests;

    public function index(){
        
        $this->authorize('viewAny',PostComponent::class);

        $all = PostComponent::get();
    
        return view('backend.common.post_component.index',compact('all'));
    }

    public function add(){

        // if(Gate::allows('create', PostComponent::class)){
        //     return view ('backend.common.post_component.add');
        // }else{
        //     return abort(403);
        // }

        // This will check permission and automatically abort with 403 if unauthorized
        $this->authorize('create', PostComponent::class);
        return view ('backend.common.post_component.add');
    }

    public function view($id){
    
        $alldata = PostComponent::where('id',$id)->firstOrFail(); // fatch the data from database 
    
        $this->authorize('view', $alldata); // check the policy 

        return view ('backend.common.post_component.view',compact('alldata'));
           
    }




    public function edit($id){
        $postComponent = PostComponent::where('id',$id)->firstOrFail(); // fatch the data from database 
        $this->authorize('view', $postComponent); // check the policy 

        return view ('backend.common.post_component.edit',compact('postComponent'));
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
