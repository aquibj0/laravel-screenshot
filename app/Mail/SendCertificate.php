<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;

class SendCertificate extends Mailable
{
    use Queueable, SerializesModels;

    public $student;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($student)
    {
        $this->student = $student;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from('work@aquibj0.xyz', 'Sir Syed T T College')
            ->subject('Webinar E-Certificate | M.S.S.P.T.T. College')
            ->view('email.ceertificate')
            ->attach(public_path('storage/screenshot/'.Str::slug($this->student->name).'-'.$this->student->id.'-msspttc-webinar-certificate.pdf'));
    }
}
