<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SlidesClinique;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SlidesCliniqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
     
        $this->middleware(['auth','role:admin']);
       
    }

    public function index()
    {
        $Slides=SlidesClinique::all();
        return view('Slides.index',compact('Slides'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Slides.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'name'=>'required|max:30',
            'text'=>'required',
            // 'photo'=>'nullable|image|mimes:png,jpg|max:2048',


        ]);

        // if($request->hasFile('photo')){
        //     $photoPath = $request->file('photo')->store('Slides','public');
        // }
        // $validatedData['photo']=$photoPath;
        $validatedData['user_id'] = Auth::id();
        SlidesClinique::create($validatedData);
        Alert::success('success','add Slides success');
        return to_route('Slides.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Slide = SlidesClinique::findOrFail($id);
        return view('Slides.edit', compact('Slide'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([    
            // 'photo'=>'nullable|image|mimes:png,jpg,jpeg,gif|max:2048',     
            'name'=>'required|max:30',
            'text'=>'required',
        ]);
        $Slide=SlidesClinique::findOrFail($id);
        // if($request->hasFile('photo')){
        //     $photoPath = $request->file('photo')->store('Slides','public');
        //     $validatedData['photo']=$photoPath;
        // }
        $Slide->update($validatedData);
        Alert::success('success','edit Slides success');
        return to_route('Slides.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SlidesClinique::findOrFail($id)->delete();
        return to_route('Slides.index');
    }
}
