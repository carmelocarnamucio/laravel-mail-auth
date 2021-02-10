<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class testMail extends Mailable
{
    use Queueable, SerializesModels;

    public $test;

    public function __construct($test)
    {
      $this -> test = $test;

    }

    public function build()
    {
        return $this
              -> from('no-replay@laravel.com')
              ->view('mail.testMail');
    }
}
