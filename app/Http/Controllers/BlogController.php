<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
  public function index(){
    $blogs = Blog::all();
    return view('blog.index', ['blogs' => $blogs]);
  }

  public function edit($id){
    $blog = Blog::find($id);
    return view('blog.show', ['blog' => $blog]);
  }
  
  public function create(){
    return view('blog.create');
  }

  public function store(Request $request){
    $blog = new Blog();
    $blog->title = $request->title;
    $blog->description = $request->content;
    $blog->author = $request->author;
    $blog->save();

    return redirect()->back()->with('success', 'Blog created successfully!');
  }
}
