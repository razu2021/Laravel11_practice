<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;
use App\Mail\usercontactreplymail;

class usercontactreplyjob implements ShouldQueue
{
    use Queueable;

    public $usermail ;
    public $data ; 

    /**
     * Create a new job instance.
     */
    public function __construct($usermail,$data)
    {
       $this->usermail=$usermail;
       $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
       Mail::to($this->usermail)->send(new usercontactreplymail($this->data));
    }
}
