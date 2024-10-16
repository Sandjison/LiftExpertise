<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Vérifier si l'utilisateur est authentifié
        if (Auth::check()) {
            // Vérifie le rôle de l'utilisateur
            if (Auth::user()->email == 'adminlift@gmail.com') {
                return redirect('dashboard'); // Redirige vers le dashboard admin
            } else {
                return redirect('dashboard'); // Redirige vers le dashboard utilisateur
            }
        }

        // Si l'utilisateur n'est pas authentifié, redirige vers la page de login
        return redirect('login');
    }
}
