<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(){
    	//sin parametro devuelve todo
    	return request();
    	//return $request->get('email');
    }
}
