<?php

namespace App\Http\Controllers;

use App\Mail\welcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    function sendEmail(Request $req){
        // return "Email send";
        $to = $req->to;
        $msg=$req->message;
        $subject=$req->subject;

        Mail::to($to)->send(new welcomeEmail($msg,$subject));
        return "Mail send";
    }
    
}
