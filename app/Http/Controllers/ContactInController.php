<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactInRequest;
use App\Http\Requests\UpdateContactInRequest;
use App\Models\ContactIn;

class ContactInController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.contactin.index', [
            'contactIns' => ContactIn::all(),
        ]);
    }

    public function frontendIndex()
    {
        return view('frontend.contact.index', [
            'websetting' => \App\Models\WebSetting::first(),
            'heroes' => \App\Models\HeroSection::where('type_id', 3)->first(),
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
    public function store(StoreContactInRequest $request)
    {
        $validateData = $request->validate([
            'firstname' => 'string|required|max:255',
            'lastname' => 'string|required|max:255',
            'email' => 'email|required|max:255',
            'message' => 'string|required|max:255',
        ]);

        ContactIn::create($validateData);
        return redirect('/contact');
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactIn $contactIn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactIn $contactIn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactInRequest $request, ContactIn $contactIn)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(ContactIn $contactin)
    {
        $contactin->delete();
        return redirect('/admin/contactin');
    }
}
