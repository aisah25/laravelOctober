<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

  
    public function store(Request $request)
    {
        $email = $request->input('email');
        $name = $request->input('name');
        $subject = $request->input('subject');
        $message = $request->input('message');
        return "Email : ".$email." <br> Name : ".$name." <br> Subject : ".$subject." <br> Message : ".$message;
    }
}
