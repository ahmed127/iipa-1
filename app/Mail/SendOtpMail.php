<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendOtpMail extends Mailable
{
    use Queueable, SerializesModels;

    public $otp, $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($otp, $email)
    {
        $this->email = $email;
        $this->otp = $otp;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data['message'] = __('lang.otp_msg', ['otp' => $this->otp]);
        return $this->markdown('emails.otp', $data);
    }
}
