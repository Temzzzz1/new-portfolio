<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(ContactRequest $req) {

        $data = array(
            'name'      =>  $req->name,
            'message'   =>   $req->message,
            'phone' => $req->phone
        );


        Mail::send(['text' => 'mail'], ['name', $req->name], function ($message) use ($req) {
            $message->to('artem.rusanov.02@gmail.com', 'To Rusanov A.')->subject('OFFER');
            $message->from($req->email, $req->name);
        });
        return redirect()->route('contact')->with('success', 'Message was sent. Thank you!');
    }
}

