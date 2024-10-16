<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Mail;
use App\Interfaces\ContactInterface;
use App\Mail\ContactMail;
use App\Models\Contact;

class ContactRepository implements ContactInterface
{
    /**
     * Create a new class instance.
     */
    // public function __construct()
    // {
    //     //
    // }

    public function SendContactMail($data)
    {
        
        Mail::to("ekoueblasandjison@gmail.com")->send(new ContactMail($data['firstName'], $data['lastName'], $data['email'], $data['subject'], $data['message']));

        return Contact::create($data);

    }
}
