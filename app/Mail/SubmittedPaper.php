<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use Illuminate\Http\Request;

class Submittedpaper extends Mailable
{
    use Queueable, SerializesModels;

    // public $paper;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
      
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->view('emails.paper.submitted',['leadauthor'=>$request->leadauthor,'papertitle'=>$request->papertitle])->to($request->email);
    }
}
