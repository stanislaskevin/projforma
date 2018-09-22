<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;
use Illuminate\support\Facades\Mail;
use App\Http\Requests\ContactRequest;


class ContactMessageController extends Controller
{
    public function create()
    {
        return view('front.contact');
    }
    public function store(ContactRequest $request)
    {
        $mailable = new ContactMessageCreated($request->name, $request->email, $request->message);
        Mail::to('admin@exemple.com')->send($mailable);

        flashy()->success('Nous vous repondrons dans les plus bref delais');
        return 'sucess';
    }

}
