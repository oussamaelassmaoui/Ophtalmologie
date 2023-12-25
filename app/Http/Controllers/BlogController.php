<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    public function __construct()
    {
     
        $this->middleware(['auth','role:admin'])->except(['show','search']);
       
    }
    public function search(Request $request){
        $search =  $request->input('search');
        $Articles= Blog::where(function($query) use($search){
            $query->where('title', 'like', "%$search%");
        })->get();
        return view('pages.Article', compact('Articles','search'));
    }
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $blogs=Blog::paginate(12);
        return view('Blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'quoted'=>'required',
            'text'=>'required',
           'title'=>'required',
            'photo'=>'nullable|image|mimes:png,jpg|max:2048',
            
        
        ]);

        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('Blogs','public');
        }
        $validatedData['photo']=$photoPath;
        $validatedData['user_id'] = Auth::id();
        Blog::create($validatedData);
        Alert::success('success','add blog success');
        return to_route('Blogs.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ARTICLES=Blog::paginate(12);
        $blog = Blog::findOrFail($id);
        return view('Blogs.show', compact('blog','ARTICLES'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('Blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'quoted'=>'required',
            'text'=>'required',
           'title'=>'required',
            'photo'=>'nullable|image|mimes:png,jpg,jpeg,gif|max:2048',
            
        
        ]);
        $blog=Blog::findOrFail($id);
        if($request->hasFile('photo')){
            $photoPath = $request->file('photo')->store('Blogs','public');
            $validatedData['photo']=$photoPath;
        }
        $blog->update($validatedData);
        Alert::success('success','edit blog success');
        return to_route('Blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::findOrFail($id)->delete();
        return to_route('Blogs.index');
    }
}
