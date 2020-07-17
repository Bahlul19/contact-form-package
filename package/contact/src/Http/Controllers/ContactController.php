<?php

namespace Bahlul\Contact\Http\Controllers;


use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Bahlul\Contact\Models\Contact;

use Bahlul\Contact\Mail\ContactMailable;

use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function sendEmail(Request $request)
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->subject, $request->name));

        $sendEmailViaForm = new Contact();
        $sendEmailViaForm->name = $request->name;
        $sendEmailViaForm->email = $request->email;
        $sendEmailViaForm->subject = $request->subject;

        $saveValue = $sendEmailViaForm->save();

        if($saveValue)
        {
            return Redirect()->route('contact');
        }

    }
}
