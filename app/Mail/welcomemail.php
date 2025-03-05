<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class welcomemail extends Mailable
{
    use Queueable, SerializesModels;

    // define your all  variable here 
    public $mailsubject;
    public $mailmessages ;
    public $sociallink ;
    private $address ;
    public $post ;






    /**
     * Create a new message instance.
     */
    public function __construct($mailsubject , $mailmassages ,$sociallink ,$address,$post) // this variable come from mail controller 
    {
        $this->mailsubject = $mailsubject ;
        $this->mailmessages = $mailmassages ;
        $this->sociallink = $sociallink ;
        $this->address = $address ;  
        $this->post = $post ;  
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->mailsubject, // use this only for mail title or subject 
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.welcome-mail',   // its return a view file . where your view file is located 
            with:[
                'address'=>$this->address,   // only use for private or protected variable 
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array     // this method use only for mail attachetment 
    {
        return [];
    }
}
