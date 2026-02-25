<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TechStack;
use Illuminate\Http\Request;

class TechStackController extends Controller
{
    public function index()
    {
        $techStacks = TechStack::orderBy('order', 'asc')->get();
        return view('admin.tech-stack.index', compact('techStacks'));
    }

    public function create()
    {
        return view('admin.tech-stack.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'icon' => 'required|max:255',
            'order' => 'integer',
        ]);

        TechStack::create($validated);
        return redirect()->route('admin.tech-stack.index')->with('success', 'Tech stack item created.');
    }

    public function edit(TechStack $techStack)
    {
        return view('admin.tech-stack.edit', compact('techStack'));
    }

    public function update(Request $request, TechStack $techStack)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'icon' => 'required|max:255',
            'order' => 'integer',
        ]);

        $techStack->update($validated);
        return redirect()->route('admin.tech-stack.index')->with('success', 'Tech stack item updated.');
    }

    public function destroy(TechStack $techStack)
    {
        $techStack->delete();
        return redirect()->route('admin.tech-stack.index')->with('success', 'Tech stack item deleted.');
    }
}
