<?php

namespace App\Http\Controllers;

use App\Models\RDV;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class RdvController extends Controller
{
 

    public function __construct()
    {
     
        $this->middleware(['auth','role:admin']);
       
    }
    public function search(Request $request){
        $search =  $request->input('search');
        $rdvs= RDV::where(function($query) use($search){
            $query->where('CIN', 'like', "%$search%");
        })->get();
        return view('RDV.index', compact('rdvs','search'));
    }
    
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $rdvs=RDV::paginate(10);
        return view('RDV.index',compact('rdvs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("RDV.create");
    }

    /**
     * Store a newly created resource in storage.
     */
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
        return to_route('RDV.create');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $rdv = RDV::findOrFail($id);
        // return view('RDV.show', ['rdv' => $rdv]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $rdv = RDV::findOrFail($id);
        return view('RDV.edit', compact('rdv'));
        

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'nom_complet'=>'required|max:30',
            'Date_de_naissance'=>'required|date|before_or_equal:today',
           'Téléphone'=>'required|numeric',
            'Email'=>'required|email',
            'CIN'=>'required|max:40',
            'Date_rendez_vous'=>'required|date|after_or_equal:today',
        ],
        [
            'Téléphone.numeric' => 'Le champ téléphone doit être un numéro.',
        ]);
      $rdv=RDV::findOrFail($id);
      $rdv->update($validatedData);
      Alert::success('success','Ma date a été mise à jour avec succès');
      return to_route('RDV.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        RDV::findOrFail($id)->delete();
        return to_route('RDV.index');
    }
}
