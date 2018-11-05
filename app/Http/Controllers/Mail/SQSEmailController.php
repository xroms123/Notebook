<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmail;
use Illuminate\Http\Request;

class SQSEmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data['recipient'] = $request->email;
        $data['content'] = $request->content;
        $data['name'] = $request->name;

        dispatch(new SendEmail($data));
        return;
    }
}
