<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $data = Blog::orderBy('created_at', 'DESC')->get();
        return view('admin.blog.index', compact('data'));
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.edit', compact('blog'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $validated['user_id'] = auth()->id();
        
        $blog = Blog::create($validated);
        return redirect('/admin/blogs');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $blog = Blog::find($id);
        $blog->update($validated);

        return redirect('/admin/blogs/');
    }

    public function destroy(Request $request, $id)
    {
        $data = Blog::find($id)->delete();
        return response()->json($data);
    }
}
