<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $query = Tag::query();

        if(request()->has('keyword')) {
            $query = $query->where('name', 'like', '%'.request()->keyword.'%');
        }

        $tags = $query->latest()->paginate(5);

        return view('admin.tags.index')
            ->with([
                'tags' => $tags,
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

        $tag = Tag::create([
            'name' => $validated['name'],
            'is_published' => $validated['is_published']
        ]);

        return redirect()->route('admin.tags.index')
            ->with('success', "$tag->name is successfully created.");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tag $tag)
    {
        $validated = $request->validate([
            'name' => ['required', 'unique:tags,name,' . $tag->id],
            'is_published' => 'boolean',
        ]);

        if(!isset($validated['is_published'])) {
            $validated['is_published'] = 0;
        }

        $tag->update($validated);

        return redirect()->route('admin.tags.index')
            ->with('success', "$tag->name is successfully updated.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('admin.tags.index')
            ->with('success', "Tag has been successfully deleted.");
    }
}
