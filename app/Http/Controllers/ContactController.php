<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function create()
    {
        return view('pages.Contact');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'nom_complet'=>'required',
          'Téléphone' => 'required|numeric',
          'Email' => 'required|email',
          'Sujet' => 'required',
          'Votre_Message' => 'required',
        ],
        [
          'Téléphone.numeric' => 'Le champ téléphone doit être un numéro.',
      ]);

        $data = [
          'nom_complet'=>$request->nom_complet,
          'Sujet' => $request->Sujet,
          'Téléphone' => $request->Téléphone,
          'Email' => $request->Email,
          'Votre_Message' => $request->Votre_Message
        ];

        Mail::send('layouts.email-template', $data, function($message) use ($data) {
          $message->to($data['Email'])
          ->subject($data['Sujet']);
        });
        Alert::success('message','Email successfully sent!');
        return back();
    }
}
