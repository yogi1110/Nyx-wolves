<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class base extends Controller
{
    public function home(){
    	return view('home');

    }
    public function services(){
    	
    }
    public function company(){
    	return "hello";
    	
    }
    public function Login(){
    	return view('Login');
    	
    }
}
