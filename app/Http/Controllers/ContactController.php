<?php

namespace App\Http\Controllers;

use App\Interfaces\ContactInterface;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private ContactInterface $contactInterface;

    public function __construct(ContactInterface $contactInterface)
    {
        $this->contactInterface = $contactInterface;
    }

    public function messageDashboard()
    {
        $contacts = Contact::all();

        return  view('messageDashboard', ["contacts" => $contacts]);
    }

    public function contactSendEmail(Request $request)
    {
        $data = [
            "firstName" => $request->firstName,
            "lastName" => $request->lastName,
            "email" => $request->email,
            "subject" => $request->subject,
            "message" => $request->message,
        ];

        try {
            $mail = $this->contactInterface->SendContactMail($data);

            if (!$mail) {
                return back()->with('error', 'Impossible d\'envoyer cet email.');
            } else {
                return back()->with('success', 'Email envoyé avec succès');
            }
        } catch (\Exception $ex) {
            return back()->with('error', 'Une erreur s’est produite pendant le traitement. Veuillez réessayer !');
        }

        // return view('contact');
    }
}
