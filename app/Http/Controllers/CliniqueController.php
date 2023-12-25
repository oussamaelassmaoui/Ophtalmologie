<?php

namespace App\Http\Controllers;

use App\Models\SlidesClinique;
use Illuminate\Http\Request;

class CliniqueController extends Controller
{
    public function index(){
        // $Slides=SlidesClinique::all();
        $Testimonials=SlidesClinique::paginate(3);
        return view('pages.Clinique',  compact('Testimonials'));
     }
}
