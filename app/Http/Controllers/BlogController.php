<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Auth;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function listeBlog()
    {
        $blogs = Blog::all();
        return view('blog.timeline',compact('blogs'));
    }

    public function index()
    { 

        $blogs = Blog::orderByDesc('created_at')->get();
        //dd($blogs);
        return view('blog.timeline',compact('blogs'));
    }

    public function store(Request $request){
        
        $blog         		= new Blog();
        $blog->titre 		= isset($request->titre)?$request->titre:'';        
        $blog->description  = $request->description;        
        $blog->image 	 	= isset($request->image)?$request->image:'';       
        $blog->user_id 		= Auth::user()->id;      
        //dd($blog);exit();     
        $blog->save();

        return redirect('/timeline');
    }

    public function edit($id){

        $blog = Blog::find($id);
        return view('blog.edit',['blog'=>$blog]);
    }
    
    public function update(Request $request){
        
        $blog 				= Blog::find($id);        
        $blog->titre 		= $request->titre;        
        $blog->description  = $request->description;        
        $blog->image 	 	= $request->image;       
        $blog->user_id 		= $request->user_id;       
        $blog->save();

        return redirect('/timeline');
    }

    public function destroy(Request $request,$id){

        $blog = Blog::find($id);
        $blog->delete();

        return redirect('/timeline');
        
    }
}
