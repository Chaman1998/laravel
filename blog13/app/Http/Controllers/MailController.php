<?php

namespace App\Http\Controllers;

use App\Mail\welcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    function sendEmail(){
        // return "Email send";
        $to = "chamansarkar11@gmail.com";
        $msg="dummy mail";
        $subject="Mail send Successfully";

        Mail::to($to)->send(new welcomeEmail($msg,$subject));
    }
    
}
