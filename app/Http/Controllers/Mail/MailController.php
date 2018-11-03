<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $data = $request->all();

        Mail::send('mail', $data, function ($message) use ($data) {
            $message->from(ENV('MAIL_USERNAME', 'mailsend@google.com'), $data['name']);
            $message->to(ENV('MAIL_SUPPORT', 'mailsend@google.com'))->subject('Feedback Mail');
        });
        return "success";
    }
}
