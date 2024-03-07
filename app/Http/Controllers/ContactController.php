<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    /*
    -------------------------------------
    | render contact view page 
    -------------------------------------
    */
    public function index() {
        return View('contact'); 
    }

    /*-------------------------------------
    | Process contact form
    -------------------------------------
    */
    public function submitForm(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required',
            ]);
            Mail::send('mails.contact', ['data' => $request->all()], function ($message) {
                $message->to('info@graphics2prints.com.ng')->subject('Contact Form Submission');
            });
    
            return redirect()->back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
        } catch (\Exception $e) 
        {
            return redirect()->back()->with('error', 'An error occurred while sending the email.');
        }
    }
}
