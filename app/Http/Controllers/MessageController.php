<?php

namespace App\Http\Controllers;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;
//use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function store(){
    	$message = request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' => 'required',
    		'content' => 'required|min:3'
    	], [
    		'name.required' => __('I need your name')
 		]);//si falla devuelve la pagina automaticamente

    	Mail::to('juan.martin.ruiz@gmail.com')->queue(new MessageReceived($message));
    	//return new MessageReceived($message);

    	return back()->with('status', __('Message sent'));
    }
}
