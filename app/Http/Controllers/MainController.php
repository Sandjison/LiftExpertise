<?php

namespace App\Http\Controllers;

use App\Interfaces\ContactInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MainController extends Controller
{
    private ContactInterface $contactInterface;

    public function __construct(ContactInterface $contactInterface)
    {
        $this->contactInterface = $contactInterface;
    }

    public function logout()
    {

        Auth::logout();
        return redirect('/');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function registration()
    {
        if (Auth::check())
            return redirect()->route('dashboard');

        return view('registration');
    }

    public function forgottenPassword()
    {
        if (Auth::check())
            return redirect()->route('dashboard');

        return view('forgottenPassword');
    }

    public function otpCode()
    {
        if (Auth::check())
            return redirect()->route('dashboard');

        return view('otp');
    }

    public function newPassword()
    {
        if (Auth::check())
            return redirect()->route('dashboard');

        return view('newPassword');
    }



    public function login()
    {
        if (Auth::check())
            return redirect()->route('dashboard');

        return view('login');
    }

    public function vue()
    {
        if (Auth::check())
            return redirect()->route('dashboard');

        return view('login');
    }

    public function galerie()
    {
        if (Auth::check())
            return redirect()->route('dashboard');

        return view('galerie');
    }

    public function notreEquipe()
    {
        if (Auth::check())
            return redirect()->route('dashboard');

        return view('notreEquipe');
    }
    public function formation()
    {
        if (Auth::check())
            return redirect()->route('dashboard');

        return view('formation');
    }
   
    public function contact()
    {
        if (Auth::check())
            return redirect()->route('welcome');

        return view('contact');
    }
    public function contactSendEmail(Request $request)
    {
        $data = [
            "firstname" => $request->firstName,
            "lastname" => $request->lastName,
            "email" => $request->email,
            "object" => $request->subject,
            "content" => $request->message,
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
    public function us()
    {
        if (Auth::check())
            return redirect()->route('welcome');

        return view('us');
    }
    public function mission()
    {
        if (Auth::check())
            return redirect()->route('welcome');

        return view('mission');
    }
}
