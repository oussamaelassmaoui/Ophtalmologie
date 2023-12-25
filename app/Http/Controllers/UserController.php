<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
     
        $this->middleware(['auth','role:admin']);
       
    }
    public function index()
    {
        $users=User::all();
        return view('pages.users',compact('users'));
    }

    public function search(Request $request){
        $search =  $request->input('search');
        $users= User::where(function($query) use($search){
            $query->where('role', 'like', "%$search%")
            ->orWhere('name', 'like', "%$search%")
            ->orWhere('email', 'like', "%$search%")
            ;
        })->get();
        return view('pages.users', compact('users','search'));
    }
}
