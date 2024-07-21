<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Team;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.teams.index', [
            'teams' => Team::all(),
            'title' => 'Teams'
        ]);
    }

    public function frontendIndex()
    {
        return view('frontend.our-team.index', [
            'teams' => Team::all(),
            'heroes' => \App\Models\HeroSection::where('type_id', 2)->first(),
            'title' => 'Our Team'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request)
    {
        $request['slug'] = Str::slug($request->name) . '-' . Str::random(5);
        $validatedData = $request->validate([
            'slug' => 'required|string|max:255|unique:teams',
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
        ]);

        $team = Team::create($validatedData);

        return redirect('/admin/teams/' . $team->slug . '/edit');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view('admin.teams.edit', [
            'team' => $team,
            'title' => $team->name
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {
        $request['slug'] = Str::slug($request->name) . '-' . Str::random(5);
        $validatedData = $request->validate([
            'slug' => 'required|string|max:255|unique:teams',
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'website' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $team->slug . '.' . $image->getClientOriginalExtension();
            $validatedData['image'] = $imageName;
            if ($team->image) {
                unlink(public_path('img-teams/' . $team->image));
            }
            $image->move(public_path('img-teams/'), $imageName);
        }
        $team->update($validatedData);
        return redirect('/admin/teams/' . $team->slug . '/edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        if ($team->image) {
            unlink(public_path('img-teams/' . $team->image));
        }
        $team->delete();
        return redirect('/admin/teams');
    }
}
