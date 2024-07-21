<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWebSettingRequest;
use App\Http\Requests\UpdateWebSettingRequest;
use App\Models\WebSetting;

class WebSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.websetting.index', [
            'webSetting' => WebSetting::first(),
            'title' => 'Website Setting'
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
    public function store(StoreWebSettingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WebSetting $webSetting)
    {
        dd($webSetting);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WebSetting $webSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWebSettingRequest $request, WebSetting $webSetting)
    {
        $validatedData = $request->validate([
            "web_title" => "string",
            "download_link" => "string",
            "video_link" => "string",
            "instagram_link" => "string",
        ]);

        if ($request->hasFile('icon_image')) {
            $image = $request->file('icon_image');
            $imageName = $image->getClientOriginalName();
            $validatedData['icon_image'] = $imageName;
            if ($webSetting->icon_image) {
                unlink(public_path('/icons/' . $webSetting->icon_image));
            }
            $image->move(public_path('/icons/'), $imageName);
        }

        if ($request->hasFile('logo_image')) {
            $image = $request->file('logo_image');
            $imageName = $image->getClientOriginalName();
            $validatedData['logo_image'] = $imageName;
            if ($webSetting->logo_image) {
                unlink(public_path('/img/' . $webSetting->logo_image));
            }
            $image->move(public_path('/img/'), $imageName);
        }

        if ($request->hasFile('alternate_logo_image')) {
            $image = $request->file('alternate_logo_image');
            $imageName = $image->getClientOriginalName();
            $validatedData['alternate_logo_image'] = $imageName;
            if ($webSetting->alternate_logo_image) {
                unlink(public_path('/img/' . $webSetting->alternate_logo_image));
            }
            $image->move(public_path('/img/'), $imageName);
        }

        WebSetting::first()->update($validatedData);
        return redirect('/admin/websetting');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WebSetting $webSetting)
    {
        //
    }
}
