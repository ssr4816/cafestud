<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\user;

class Register extends Mailable
{
    use Queueable, SerializesModels;
    public $stud;

    
    public function __construct($stud)
    {
        $this->stud = $stud;

    }

    
    public function build()
    {
        return $this->subject('Cafe Stud: Registration Successfull')->view('sendreg');
    }
}
