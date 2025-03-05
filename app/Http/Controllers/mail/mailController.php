<?php

namespace App\Http\Controllers\mail;

use App\Http\Controllers\Controller;
use App\Models\PostComponent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\mail\welcomemail;
use App\Models\User;

class mailController extends Controller
{
    public function SendMail(){
       $alluser  = User::get();
       $post = PostComponent::get();
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

    foreach($alluser as $mailto){
        $mailsend =   Mail::to($mailto)->send(new welcomemail($mailsubject , $mailmassages,$sociallink,$address,$post));
    }


   
      
    
      if ($mailsend) {
        flash()->success('Email Submited !');
     } else {
        flash()->error('Your E-mail submitted Faield !.');
     }  

     return back();

    }
}
