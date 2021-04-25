<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class registerController extends Controller
{

    // ----------- [ Return view] -----------
    public function index()
    {
        return view('auth.register');
    }

    // ----------- [ Logic to Register the user] -----------
    public function register(Request $request)
    {

        // ----------- [ Form validate ] -----------
        $this->validate($request, [
            'fullName'              =>      'required|string|max:20',
            'email'             =>      'required|email',
            'phone'             =>      'required|numeric|min:10',
            'password'          =>      'required|alpha_num|min:6',
            //'confirm_password'  =>      'required|same:password',
        ]);


        // ----------- [ Insert data into database ] -----------
        $user_id = User::create([

            'name' => $request->fullName,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ])->id;

        if (!empty($user_id)) {
            return redirect()->route('dashboard');
        } else {
            return back()->with("status", "Registration failed");
        }
    }
}