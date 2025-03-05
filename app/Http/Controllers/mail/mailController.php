<?php

namespace App\Http\Controllers\mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\mail\welcomemail;

class mailController extends Controller
{
    public function SendMail(){
        $mailto = "mdrazuhossainraj@gmail.com";
        $mailsubject = "Welcome to Human and Nature Development Society (HANDS)";
        $mailmassages = "Human and Nature Development Society (HANDS) is a Non-Governmental Organization (NGO) established in 2011 with a mindful dedicated social workers with the virtuous motive to furnish social service activities. HANDS provides micro-credit facilities and engaged in making difference in the society by doing selfless sincere activities in order to enlightening, empowering and building a capacity along with upliftment of the oppressed and depressed community's people.";
    
    
        Mail::to($mailto)->send(new welcomemail($mailsubject , $mailmassages));
    
    }
}
