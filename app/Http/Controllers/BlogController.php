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

  public function show($id){
    $blog = Blog::find($id);
    return view('blog.edit', ['blog' => $blog]);
  }
  
  public function create(){
    return view('blog.create');
  }

  public function update(Request $request,$id){
    $blog= Blog::find($id);
    $blog->title = $request->title;
    $blog->description = $request->content;
    $blog->author = $request->author;
    $blog->save();

    return redirect('blog/all')->with('success', 'Blog updated successfully!');

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
