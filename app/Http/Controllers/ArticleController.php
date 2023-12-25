<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $Articles=Blog::paginate(12);
        return view('pages.Article',compact('Articles'));
    }

    public function search(Request $request){
        $search =  $request->input('search');
        $Articles= Blog::where(function($query) use($search){
            $query->where('title', 'like', "%$search%");
        })->get();
        return view('pages.Article', compact('Articles','search'));
    }
}
