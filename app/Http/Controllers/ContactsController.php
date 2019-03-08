<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShippe;
use App\Models\Message;

use App\Http\Requests\ContactRequest;
use App\Mail\contactMessageCreated;

class ContactsController extends Controller
{ 
	public function create()
	{

		return view('contacts.create');
	}
	public function store (ContactRequest $request) 
	
    {
    	$message = new Message();
    	$message->name = $request->name;
    	$message->email = $request->email;
    	$message->message = $request->message;
    	$message->save();
    	$mailable = new OrderShippe($message);
    	Mail::to(config('myConfig.adminAddress'))->send($mailable);
        flashing('Message Envoyer avec succes');
    	return redirect()->route('root_path');
 	}
 
	
}
