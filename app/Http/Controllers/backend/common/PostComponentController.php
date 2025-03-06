<?php

namespace App\Http\Controllers\backend\common;

use App\Http\Controllers\Controller;
use App\Models\PostComponent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests; 
use App\Jobs\SendWelcomeEmailJob;

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





    public function tesmailsend($id){
        $alluser  = User::get();
        $post = PostComponent::where('id',$id)->first();
        //dd($post);
 
         $mailsubject = "Welcome to Human and Nature Development Society (HANDS)";
         $mailmassages = "Human and Nature Development Society (HANDS) is a Non-Governmental Organization (NGO) established in 2011 with a mindful dedicated social workers with the virtuous motive to furnish social service activities. HANDS provides micro-credit facilities and engaged in making difference in the society by doing selfless sincere activities in order to enlightening, empowering and building a capacity along with upliftment of the oppressed and depressed community's people.";
         $sociallink =[
             'facebook'=>'facebook.com',
             'twitter'=>'twitter.com',
             'linkedin'=>'linkedin.com',
             'instagram'=>'instagram.com',
         ];
         $address = "51/2 west Razabazar dhaka-1215";
 
         foreach($alluser as $user){
            if($user){
                $mailsend =   dispatch(new SendWelcomeEmailJob($user,$mailsubject , $mailmassages,$sociallink,$address,$post));
            }
        }
 
 
    
       
     
       if ($mailsend) {
         flash()->success('Email Submited !');
      } else {
         flash()->error('Your E-mail submitted Faield !.');
      }  
 
      return back();
    }






}
