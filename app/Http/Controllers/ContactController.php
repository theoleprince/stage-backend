<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class ContactController extends Controller
{
    public function create()
    {

    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',

        ]);


        Mail::to('junietatsoula@gmail.com')->send(new ContactMail($data));
        
        return response()->json('votre message a été envoyé!!!');
    }
}
