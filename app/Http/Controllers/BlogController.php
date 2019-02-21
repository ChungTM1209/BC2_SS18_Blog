<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.list', compact('blogs'));
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blogs.edit', compact('blog'));
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        return view('blogs.show', compact('blog'));
    }

    public function add()
    {
        return view('blogs.create');
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        $blog->delete($id);
        return redirect()->route('list');
    }

    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->name = $request->input('name');
        $blog->content = $request->input('content');
        $blog->author = $request->input('author');
        $blog->description = $request->input('description');
        $blog->save();
        return redirect()->route('list');
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->name = $request->input('name');
        $blog->content = $request->input('content');
        $blog->author = $request->input('author');
        $blog->description = $request->input('description');

        $blog->save();
        return redirect()->route('list');
    }
}
