<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'nullable',
            'content' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:draft,published',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('blogs', 'public');
            $validated['thumbnail'] = $path;
        }

        if ($validated['status'] === 'published' && empty($validated['published_at'])) {
            $validated['published_at'] = now();
        }

        $blog = Blog::create($validated);

        // Handle Gallery Uploads
        // if ($request->hasFile('gallery')) {
        //     foreach ($request->file('gallery') as $image) {
        //         $imagePath = $image->store('blogs/gallery', 'public');
        //         $blog->images()->create([
        //             'image_path' => $imagePath
        //         ]);
        //     }
        // }

        return redirect()->route('admin.blog.index')->with('success', 'Article created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $blog->load('images');
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'nullable',
            'content' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:draft,published',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('thumbnail')) {
            // Delete old thumbnail
            if ($blog->thumbnail) {
                Storage::disk('public')->delete($blog->thumbnail);
            }
            $path = $request->file('thumbnail')->store('blogs', 'public');
            $validated['thumbnail'] = $path;
        }

        if ($validated['status'] === 'published' && empty($blog->published_at) && empty($validated['published_at'])) {
            $validated['published_at'] = now();
        }

        $blog->update($validated);

        // Handle Additional Gallery Uploads
        // if ($request->hasFile('gallery')) {
        //     foreach ($request->file('gallery') as $image) {
        //         $imagePath = $image->store('blogs/gallery', 'public');
        //         $blog->images()->create([
        //             'image_path' => $imagePath
        //         ]);
        //     }
        // }

        return redirect()->route('admin.blog.index')->with('success', 'Article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        if ($blog->thumbnail) {
            Storage::disk('public')->delete($blog->thumbnail);
        }

        // Delete gallery images
        foreach ($blog->images as $image) {
            Storage::disk('public')->delete($image->image_path);
        }

        $blog->delete();

        return redirect()->route('admin.blog.index')->with('success', 'Article deleted successfully.');
    }

    /**
     * Delete an individual gallery image.
     */
    public function deleteImage(BlogImage $image)
    {
        Storage::disk('public')->delete($image->image_path);
        $image->delete();

        return back()->with('success', 'Gallery image deleted successfully.');
    }
}

