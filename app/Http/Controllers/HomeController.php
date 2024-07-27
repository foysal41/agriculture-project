<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class HomeController extends Controller
{
    public function page(){
        return view('home');
    }

    public function aboutpage(){
        return view('about');
    }

    public function showpage(){
        return view('contact');
    }

    public function submitform(Request $request){
        $validation = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = new Contact();
        $contact->name = $validation['name'];
        $contact->email = $validation['email'];
        $contact->subject = $validation['subject'];
        $contact->message = $validation['message'];
        $contact->save();

        return redirect('/contact')->with('success', 'Thank you for your message. We will get back to you shortly.');
    }

    


    
}
