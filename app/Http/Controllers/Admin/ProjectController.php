<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',
        ]);

        $project = new Project();
        $project->name = $request->name;
        $project->description = $request->description;

        if ($request->hasFile('image')) {
            $project->image_path = $request->file('image')->store('projects', 'public');
        }

        $project->save();

        return redirect()->route('projects.index');
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',
        ]);

        $project->name = $request->name;
        $project->description = $request->description;

        if ($request->hasFile('image')) {
            $project->image_path = $request->file('image')->store('projects', 'public');
        }

        $project->save();

        return redirect()->route('projects.index');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index');
    }
}
