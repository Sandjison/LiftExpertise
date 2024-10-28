<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function update_profil(Request $request)
    {
        $user = Auth::user();

        // Mise à jour des attributs de l'utilisateur
        $user->phone = $request->phone;
        $user->address = $request->address;

        // Gestion de l'upload de l'image de profil
        if ($request->hasFile('profile_picture')) {
            // Supprimer l'ancienne image si elle existe
            if ($user->profile_picture && File::exists(public_path('uploads/' . $user->profile_picture))) {
                File::delete(public_path('uploads/' . $user->profile_picture));
            }

            // Sauvegarder la nouvelle image
            $avatar = $request->file('profile_picture');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move(public_path('uploads'), $filename);
            $user->profile_picture = $filename;
        }

        // Sauvegarder les modifications de l'utilisateur
        $user->save();

        return view('dasboardProfile', ['user' => $user]);
    }
}
