<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Envoi de l'e-mail avec uniquement le contenu du message
        Mail::to('benzariyasaida@gmail.com')
            ->send(new Contact($validated['message']));

        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}