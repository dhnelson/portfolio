<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ContactFormRequest;
use Mail;
use Session;

class ContactController extends Controller
{
    public function contact() {

    	return view('contact.contact');
    }

    public function ContactForm(ContactFormRequest $request){

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

        Session::flash('flash_message', 'Thank You, Your Message Was Sent Successfully!'); 
        Session::flash('alert-class', 'alert-success'); 

        return redirect()->back();
    }
}
