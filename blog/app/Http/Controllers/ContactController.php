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

        $validatedData = $request->validate(
            [
                'fullname' => 'required|max:255|min:2',
                'email' => 'required|email',
                'subject' => 'required|min:10'
            ]
        );

        $mail = new Mail;
        $mail->fullName = $request->fullname;
        $mail->eMail = $request->email;
        $mail->message = $request->subject;

        $mail->save();
    }
}
