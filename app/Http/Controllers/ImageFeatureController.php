<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImageFeatureRequest;
use App\Http\Requests\UpdateImageFeatureRequest;
use App\Models\ImageFeature;
use App\Models\Type;

class ImageFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.imagefeatures.index', [
            'imageFeatures' => ImageFeature::all()->sortBy('type_id'),
            'types'  => Type::whereNotIn('id', [2, 3, 4])->get(),
            'title' => 'Feature Images'
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
    public function store(StoreImageFeatureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImageFeature $imageFeature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImageFeature $imageFeature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImageFeatureRequest $request, ImageFeature $imageFeature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImageFeature $imageFeature)
    {
        //
    }
}
