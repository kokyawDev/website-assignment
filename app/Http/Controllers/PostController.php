<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $query = Post::query();

        if(request()->has('keyword')) {
            $query = $query->where('name', 'like', '%'.request()->keyword.'%');
        }

        $posts = $query->latest()->paginate(5);

        return view('admin.posts.index')
            ->with([
                'posts' => $posts,
                'keyword' => request()->keyword ?? null
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:tags|max:255',
            'is_published' => 'boolean',
        ]);

        if(!isset($validated['is_published'])) {
            $validated['is_published'] = 0;
        }

        $post = Post::create([
            'name' => $validated['name'],
            'is_published' => $validated['is_published']
        ]);

        return redirect()->route('admin.posts.index')
            ->with('success', "$post->name is successfully created.");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'name' => ['required', 'unique:tags,name,' . $post->id],
            'is_published' => 'boolean',
        ]);

        if(!isset($validated['is_published'])) {
            $validated['is_published'] = 0;
        }

        $post->update($validated);

        return redirect()->route('admin.posts.index')
            ->with('success', "$post->name is successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index')
            ->with('success', "Post has been successfully deleted.");
    }
}
