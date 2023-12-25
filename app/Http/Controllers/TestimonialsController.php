<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SlidesClinique;

class TestimonialsController extends Controller
{
    public function index()
    {
        $Testimonials=SlidesClinique::paginate(6);
        return view('pages.Testimonials',compact('Testimonials'));
    }
}
