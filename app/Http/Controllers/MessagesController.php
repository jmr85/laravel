<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(){
    	request()->validate([
    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' => 'required',
    		'content' => 'required|min:3'
    	], [
    		'name.required' => __('I need your name')
 		]);//si falla devuelve la pagina automaticamente
    	return 'Datos validados';
    }
}
