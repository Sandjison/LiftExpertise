<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubscriptionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Permet à l'utilisateur de faire cette requête
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'gender' => 'required|in:male,female',
            'payment_number' => 'required|string|max:20',
            'contact' => 'required|string|max:20',
        ];
    }

    /**
     * Custom messages for validation errors.
     */
    public function messages(): array
    {
        return [
            'first_name.required' => 'Le nom est obligatoire.',
            'last_name.required' => 'Le prénom est obligatoire.',
            'email.email' => 'L\'email doit être valide.',
            'gender.required' => 'Le sexe est obligatoire.',
            'gender.in' => 'Le sexe doit être "male" ou "female".',
            'payment_number.required' => 'Le numéro de paiement est obligatoire.',
            'contact.required' => 'Le contact est obligatoire.',
           
        ];
    }
}
