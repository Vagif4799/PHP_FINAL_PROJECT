<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact() {
        return view('contact');
    }

    public function sendMail(Request $request) {
        $mail = new Mail;
        $mail->fullName = $request->fullname;
        $mail->eMail = $request->email;
        $mail->message = $request->subject;

        $mail->save();
    }
}
