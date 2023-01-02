<?php

namespace App\Helpers;

use App\Mail\SendOtpMail;
use Illuminate\Support\Facades\Mail;

trait MailTrait
{

    public function send_otp($user)
    {
        Mail::to($user)->send(new SendOtpMail($user->otp_code, $user->email));
    }
}
