<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;


class registerApiController extends Controller
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
            'fullName'              =>   'required|string|max:20',
            'email'             =>      'required|email',
            'phone'             =>      'required|numeric|min:10',
            'password'          =>      'required|alpha_num|min:6',
            'confirm_password'  =>      'required|same:password',
        ]);


        // Get user from email
        $user = User::where('email', $request->email)->first();

        if (empty($user)) {
            User::create([
                'name' => $request->fullName,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
            ])->id;


            return response()->json([
                'data' => array(),
                "message" => "User Registered!",
                "error" => array()
            ], 200);
        }

        return response()->json([
            'data' => array(),
            "message" => "",
            "error" => array("User Registration Failed!")
        ], 400);
    }
}