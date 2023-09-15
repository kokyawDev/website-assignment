<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3', 'max:10000'],
            'short_description' => ['required', 'min:3', 'max:255'],
            'category_id' => ['required', 'exists:categories,id'],
            'thumbnail' => ['required', 'image'],
            'cover' => ['required', 'image'],
        ]);

        DB::beginTransaction();

        try {
            if($request->hasFile('thumbnail')) {
                $file = $request->file('thumbnail');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/posts/', $filename);
                $data['thumbnail'] = '/uploads/posts/'.$filename;
            }

            if($request->hasFile('cover')) {
                $file = $request->file('cover');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/posts/', $filename);
                $data['thumbnail'] = '/uploads/posts/'.$filename;
            }

            Post::create($data);

            DB::commit();

            return redirect()->route('admin.posts.index')
                ->with('success', 'Post has been created successfully!');

        } catch (\Exception $e) {
            dd($e);
            DB::rollBack();

            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();

        return view('admin.posts.edit')
            ->with([
                'categories' => $categories,
                'post' => $post
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3', 'max:10000'],
            'short_description' => ['required', 'min:3', 'max:255'],
            'category_id' => ['required', 'exists:categories,id'],
            'thumbnail' => ['nullable', 'image'],
            'cover' => ['nullable', 'image'],
        ]);

        DB::beginTransaction();

        try {
            if($request->hasFile('thumbnail')) {
                $file = $request->file('thumbnail');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/products/', $filename);
                $data['thumbnail'] = '/uploads/products/'.$filename;
            }

            $post->update($data);

            DB::commit();

            return redirect()->route('admin.posts.index')->with('success', 'Post has been updated successfully!');

        } catch (\Exception $e) {

            DB::rollBack();

            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.posts.index')->with('success', 'Post has been deleted successfully!');

    }
}
