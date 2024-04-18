<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function submitContact(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::to('taofeekadekunle2@gmail.com')->send(new ContactMail($validatedData));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function submitJoin(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::to('hr@iguruweb.co')->send(new ContactMail($validatedData));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
