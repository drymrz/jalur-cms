<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVersionRequest;
use App\Http\Requests\UpdateVersionRequest;
use App\Models\Version;

class VersionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.versions.index', [
            'versions' => Version::orderBy('release_date', 'desc')->get()
        ]);
    }

    public function frontendIndex()
    {
        return view('frontend.download.index', [
            'versions' => Version::orderBy('release_date', 'desc')->get()->take(4),
            'websetting' => \App\Models\WebSetting::first(),
            'heroes' => \App\Models\HeroSection::where('type_id', 4)->first()
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
    public function store(StoreVersionRequest $request)
    {
        $validateData = $request->validate([
            'version_number' => 'required|string|max:255|unique:versions',
            'content' => 'required|string',
            'release_date' => 'required|date',
        ]);

        Version::create($validateData);
        return redirect('/admin/versions');
    }

    /**
     * Display the specified resource.
     */
    public function show(Version $version)
    {
        dd($version);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Version $version)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVersionRequest $request, Version $version)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Version $version)
    {
        $version->delete();
        return redirect('/admin/versions');
    }
}
