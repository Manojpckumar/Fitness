<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Validator;

class Contact extends Controller
{
    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    **/
    public function store(Request $request)
    {

       // Message Create
       Message::create([
        'name' => $request->name,
        'Message' => $request->Message,
    ]);
       return redirect()->back()->with('Messagge', 'Contact');
   }
}
