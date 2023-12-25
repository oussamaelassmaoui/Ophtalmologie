<?php

namespace App\Http\Controllers;

use App\Models\RDV;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PrendreRDVController extends Controller
{
    public function index()
    {
        return view('pages.Prendre_RDV ');
    }

    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'nom_complet'=>'required|max:30',
            'Date_de_naissance'=>'required|date|before_or_equal:today',
           'Téléphone'=>'required|numeric',
            'Email'=>'required|email',
            'CIN'=>'required|max:40|unique:r_d_v_s,CIN',
            'Date_rendez_vous'=>'required|date|after_or_equal:today',
        ],
        [
            'Téléphone.numeric' => 'Le champ téléphone doit être un numéro.',
            'CIN.unique'=>'cin a déjà été saisi',
        ]);
        RDV::create($validatedData);
        Alert::success('success','Le rendez-vous a été réservé avec succès pour la session');
        return to_route('Prendre_RDV');
    }
}
