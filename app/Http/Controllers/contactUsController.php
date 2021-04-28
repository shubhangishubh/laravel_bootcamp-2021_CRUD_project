<?php

namespace App\Http\Controllers;

use App\Models\contacts;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class contactUsController extends Controller
{
    // ----------- [ Return view] -----------
    public function index()
    {
        return view('pages.contactUs');
    }

    // ----------- [ Logic to Register the user] -----------
    public function contactUs(Request $request)
    {

        // ----------- [ Form validate ] -----------
        $this->validate($request, [
            'name' => 'required|max:250',
            'email'     => 'nullable|email',
            'phone'     => 'required',
            'country'   => 'max:250',
            'company'   => 'max:250'
        ]);


        // ----------- [ Insert data into database ] -----------
        contacts::create([
            'name'          => $request->name,
            'phone'         => $request->phone,
            'email'         => $request->email,
            'country'       => $request->country,
            'company'       => $request->company,
        ]);

        // List of contacts
        $contacts = contacts::all();

        dd($contacts);

        if (!empty($contacts)) {
            return redirect()->route('contact');
        } else {
            return back()->with("status", "Registration failed");
        }
    }
}