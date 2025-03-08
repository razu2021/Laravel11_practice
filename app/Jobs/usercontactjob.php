<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;
use App\Mail\usercontactmail;

class usercontactjob implements ShouldQueue
{
    use  Queueable;
    public $insertData;
    public $mailto;
    public $fileName ;
    /**
     * Create a new job instance.
     */
    public function __construct(array $insertData,$mailto , $fileName )
    {
      $this->insertData = $insertData;
      $this->mailto = $mailto;
      $this->fileName = $fileName;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Mail::to($this->mailto)->send(new usercontactmail($this->insertData,$this->fileName));
    }
}
