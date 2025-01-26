<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('projects.index', ['projects' => Project::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $path = Storage::disk('public')->put('images', $request->image);

        Project::create([
            'name' => $request->name,
            'image' => $path,
            'url' => $request->url,
            'github_url' => $request->github_url
        ]);

        return redirect()->route('projects.index')->with('success', 'Project added successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projects.show', ['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('projects.edit', ['project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $path = Storage::disk('public')->put('images', $request->image);
        $project->update([
            'name' => $request->name,
            'image' => $path,
            'url' => $request->url,
            'github_url' => $request->github_url,
        ]);

        return redirect()->route('projects.index')->with('success', 'Project was updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return back()->with('delete', 'Project was deleted!');

    }
}
