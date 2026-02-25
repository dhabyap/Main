<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderBy('order', 'asc')->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'type' => 'nullable|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tags' => 'nullable|string',
            'url' => 'nullable|url',
            'status' => 'required|in:draft,published',
            'order' => 'integer',
            'category' => 'required|in:professional,personal',
            'description' => 'nullable'
        ]);

        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('projects', 'public');
            $validated['thumbnail'] = $path;
        }

        if (!empty($validated['tags'])) {
            $validated['tags'] = array_filter(array_map('trim', explode(',', $validated['tags'])));
        } else {
            $validated['tags'] = [];
        }

        Project::create($validated);

        return redirect()->route('admin.project.index')->with('success', 'Project created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'type' => 'nullable|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tags' => 'nullable|string',
            'url' => 'nullable|url',
            'status' => 'required|in:draft,published',
            'order' => 'integer',
            'category' => 'required|in:professional,personal',
            'description' => 'nullable'
        ]);

        if ($request->hasFile('thumbnail')) {
            if ($project->thumbnail && !filter_var($project->thumbnail, FILTER_VALIDATE_URL)) {
                Storage::disk('public')->delete($project->thumbnail);
            }
            $path = $request->file('thumbnail')->store('projects', 'public');
            $validated['thumbnail'] = $path;
        }

        if (isset($validated['tags'])) {
            $validated['tags'] = array_filter(array_map('trim', explode(',', $validated['tags'])));
        } else {
            $validated['tags'] = [];
        }

        $project->update($validated);

        return redirect()->route('admin.project.index')->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        if ($project->thumbnail && !filter_var($project->thumbnail, FILTER_VALIDATE_URL)) {
            Storage::disk('public')->delete($project->thumbnail);
        }

        $project->delete();

        return redirect()->route('admin.project.index')->with('success', 'Project deleted successfully.');
    }
}
