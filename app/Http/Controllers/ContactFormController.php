<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('home');
    }

    public function store()
    {
        return redirect('home')->with('message', 'Thanks for your message. You\'ll hear from me soon.');

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        
        Mail::to('karel.decoene3@gmail.com')->send(new ContactFormMail($data));
    }
}