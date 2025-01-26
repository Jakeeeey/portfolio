<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Requests\UpdateSkillRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('skills.index', ['skills' => Skill::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSkillRequest $request)
    {
        //dd(['user_id' => Auth::id(), $request]);
        $path = Storage::disk('public')->put('images', $request->image);

        Skill::create([
            'user_id' => Auth::user()->id,
            'name' => $request->name,
            'image' => $path,
        ]);

        return redirect()->route('skills.index')->with('success', 'Skill added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        // dd(Skill::where('id', '=', 1))->get();
        return view('skills.show', ['skill' => $skill]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        return view('skills.edit', ['skill' => $skill]);
        //dd($skill->name);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSkillRequest $request, Skill $skill)
    {
        //dd($request->validate($request));

        $path = Storage::disk('public')->put('images', $request->image);
        $skill->update([
            'name' => $request->name,
            'image' => $path,
        ]);

        return redirect()->route('skills.index')->with('success', 'Skill was updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return back()->with('success', 'Skill was deleted!');
    }
}
