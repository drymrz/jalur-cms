<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHeroSectionRequest;
use App\Http\Requests\UpdateHeroSectionRequest;
use App\Models\HeroSection;

class HeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.heroes.index', [
            'heroes' => HeroSection::all(),
            'title' => 'Heroes Section'
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
    public function store(StoreHeroSectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HeroSection $hero)
    {
        dd($hero);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HeroSection $hero)
    {
        return view('admin.heroes.edit', [
            'hero' => $hero,
            'title' => 'Edit Hero Section'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHeroSectionRequest $request, HeroSection $hero)
    {
        $validatedData = $request->validate([
            "type_id" => "integer",
            "title" => "string",
            "title_2" => "string",
            "description" => "string",
            "description_2" => "string",
        ]);

        if ($request->hasFile('image')) {
            $imageName = "";
            $image = $request->file('image');
            if ($hero->type_id == 1) {
                $imageName = '/img/' . $image->getClientOriginalName();
                $image->move(public_path('/img/'), $image->getClientOriginalName());
            } else if ($hero->type_id == 2) {
                $imageName = '/img-teams/' . $image->getClientOriginalName();
                $image->move(public_path('img-teams/'), $image->getClientOriginalName());
            } else if ($hero->type_id == 4) {
                $imageName = '/img-features/' . $image->getClientOriginalName();
                $image->move(public_path('img-features/'), $image->getClientOriginalName());
            }

            $validatedData['image'] = $imageName;

            // if ($hero->image) {
            //     unlink(public_path($hero->image));
            // }
        }
        $hero->update($validatedData);
        return redirect('/admin/heroes/' . $hero->slug . '/edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HeroSection $heroSection)
    {
        //
    }
}
