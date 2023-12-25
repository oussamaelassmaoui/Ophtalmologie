<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolesocialController extends Controller
{
    public function index(){
        return view('pages.Pôle-social');
     }
}
