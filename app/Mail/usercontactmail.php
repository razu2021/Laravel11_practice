<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class usercontactmail extends Mailable
{
    use Queueable;

    public $insertData;
    public $fileName ;

    /**
     * Create a new message instance.
     */
    public function __construct(array $insertData,$fileName )
    {
       $this->insertData = $insertData;
       $this->fileName = $fileName;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'User Contact Mail ',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.usercontact-mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
    
        $attchment = [] ;

        if($this->fileName){
            $attchment = [
                Attachment::fromPath(public_path('uploads/user_contact/'.$this->fileName))
            ] ;
           
        }
        return $attchment;
    }
}
