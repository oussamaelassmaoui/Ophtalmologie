<?php

namespace App\Http\Controllers;

use App\Models\RDV;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\SlidesClinique;

class AdminController extends Controller
{
   public function AdminDashboard(){
      $rdvs=RDV::all();
      $blogs=Blog::all();
      $Slides=SlidesClinique::all();
      $users=User::all();
    return view('admin.dashboard',compact('rdvs','blogs','Slides','users'));
   }

}