<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;
use App\Mail\welcomemail;

class SendWelcomeEmailJob implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public $user ;
    public $mailsubject ;
    public $mailmassages ;
    public $sociallink ;
    public $address ;
    public $post ;




    
    public function __construct($user,$mailsubject , $mailmassages,$sociallink,$address,$post)
    {
        $this->user = $user ;
        $this->mailsubject = $mailsubject ;
        $this->mailmassages = $mailmassages ;
        $this->sociallink = $sociallink ;
        $this->address = $address ;
        $this->post = $post ;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->user->email)->send(new WelcomeMail($this->mailsubject,$this->mailmassages, $this->sociallink, $this->address, $this->post));
    }
}
