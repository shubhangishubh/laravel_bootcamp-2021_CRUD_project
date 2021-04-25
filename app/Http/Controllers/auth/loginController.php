<?php

namespace App\Http\Controllers\auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;



class loginController extends Controller
{
    //Return view
    public function index()
    {
        return view('auth.login');
    }
    // Logic to Login the user
    public function login(Request $request)
    {
        // ----------- [ Form validate ] -----------
        $this->validate($request, [

            'email'             =>      'required|email',
            'password'          =>      'required|alpha_num|min:6',

        ]);
        // Auth
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard');
        } else {
            return back()->with('status', 'Invalid Login Details');
        }
    }
}