<?php

namespace App\Http\Controllers;
use App\Message;


use Illuminate\Http\Request;


class MessageController extends Controller
{
    public function submit(Request $request){

    	$this->validate($request ,[
        'username' => 'required',
        'email'  => 'required'


    	]);

    	$message = New Message ;
    	$message->name = $request->input('username');
    	$message->email = $request->input('email');
    	$message->message = $request->input('message');

    	$message->save();
    	


    	return redirect('/')->with('status','Message Sent') ;
    }
}
