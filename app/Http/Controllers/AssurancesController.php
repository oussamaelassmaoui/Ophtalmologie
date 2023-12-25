<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssurancesController extends Controller
{
    public function index(){
        return view('pages.Assurances');
     }
}
