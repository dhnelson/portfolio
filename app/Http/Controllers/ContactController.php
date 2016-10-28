<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact() {

    	return view('contact.contact');
    }

    public function ContactForm(ContactFormRequest $request){

        Contact::create($request->all());

        $data = [
        	'name' 	  	  => $request->name,
        	'email'   	  => $request->email,
        	'subject' 	  => $request->subject,
        	'bodyMessage' => $request->message
        ];

        mail::send('contact.contactEmail', $data, function($message) use ($data) {
        		$message->from($data['email']);
        		$message->to('dustinhnelson@gmail.com');
        		$message->subject($data['subject']);
        });

        flash()->success('Thanks!', 'Your Message Was Sent Successfully');

        return redirect()->route('home');
    }
}
