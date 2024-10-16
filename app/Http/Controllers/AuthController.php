<?php

namespace App\Http\Controllers;

use App\Http\Requests\Authentication\ForgottenPasswordRequest;
use App\Http\Requests\Authentication\LoginRequest;
use App\Http\Requests\Authentication\OtpCodeRequest;
use App\Http\Requests\Authentication\RegistrationRequest;
use App\Http\Requests\OtpCodeRequest as RequestsOtpCodeRequest;
use App\Interfaces\AuthenticationInterface;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private AuthenticationInterface $authInterface;

    public function __construct(AuthenticationInterface $authInterface)
    {
        $this->authInterface = $authInterface;
    }

    public function login(LoginRequest $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        try {
            if ($this->authInterface->login($data)) {
                return redirect()->route('dashboard');
            } else {
                return back()->with('error', "E-mail ou mot de passe incorrect.");
            }
        } catch (\Exception $ex) {
            return back()->with('error', 'Une erreur s’est produite pendant le traitement. Veuillez réessayer !');
        }
    }

    public function registration(RegistrationRequest $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'gender' => $request->gender, 
        ];
        

        try {
            $user = $this->authInterface->registration($data);
            Auth::login($user);
            return redirect()->route('dashboard');
        } catch (\Exception $ex) {
            return $ex;
            return back()->with('error', 'Une erreur s’est produite pendant le traitement. Veuillez réessayer !');
        }
    }

    public function forgottenPassword(ForgottenPasswordRequest $request)
    {
        $data = [
            'email' => $request->email,
        ];

        try {
            if ($this->authInterface->forgottenPassword($data['email'])) {
                // return redirect()->route(route: 'otpCode')->with("email", $data['email']);
                session()->put('email', $data['email']);
                return redirect()->route('otpCode');
            } else {
                return back()->with('error', "E-mail introuvable.");
            }
        } catch (\Exception $ex) {
            return back()->with('error', 'Une erreur s’est produite pendant le traitement. Veuillez réessayer !');
        }
    }

    public function checkOtpCode(OtpCodeRequest $request)
    {
        $data = [
            'email' => $request->email,
            'code' => $request->code,
        ];

        try {
            $code = $this->authInterface->checkOtpCode($data);

            if (!$code) {
                return back()->with('error', "Code de confirmation non valide.");
            } else {
                return redirect()->route('newPassword');
            }
        } catch (\Exception $ex) {
            return back()->with('error', 'Une erreur s’est produite pendant le traitement. Veuillez réessayer !');
        }
    }

    public function newPassword(OtpCodeRequest $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
            'passwordConfirm' => $request->passwordConfirm,
            'code' => $request->code,
        ];

        try {
            $user = $this->authInterface->newPassword($data);

            if (!$user) {
                return back()->with('error', 'Impossible de mettre à jour. Veuillez réessayer.');
            } else {
                return redirect()->route('dashboard');
            }
        } catch (\Exception $ex) {
            return back()->with('error', 'Une erreur s’est produite pendant le traitement. Veuillez réessayer !');
        }
    }


    
}
