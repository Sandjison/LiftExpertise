<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Interfaces\ContactInterface;
use App\Models\Contact;
use App\Models\Subscription;
use App\Models\User;
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
        $users = User::all();

        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();
        $subscriptions = Subscription::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();
        $contacts = Contact::whereBetween('created_at', [$startOfMonth, $endOfMonth])->count();

        return view('dashboard', ["users" => $users, "subscriptions" => $subscriptions, "contacts" => $contacts]);
    }
    public function dasboardProfile()
    {

        return view('dasboardProfile');
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

    public function formule()
    {
        if (Auth::check())
            return redirect()->route('welcome');

        return view('formule');
    }

    public function factSheet()
    {
        if (Auth::check())
            return redirect()->route('welcome');

        return view('factSheet');
    }
}
