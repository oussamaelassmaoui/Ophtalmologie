<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class polesController extends Controller
{
    public function poles1(){
        return view('poles.Chirurgie_réfractive');
    }

    public function poles2(){
        return view('poles.Chirurgie_Vitréo_Rétinienne');
    }

    public function poles3(){
        return view('poles.Cataracte');
    }

    public function poles4(){
        return view('poles.ORTHOPTIE');
    }

    public function poles5(){
        return view('poles.PÉDIATRIQUE');
    }

    public function poles6(){
        return view('poles.CHIRURGIE');
    }

    public function poles7(){
        return view('poles.Bloc_Opératoire');
    }
}
