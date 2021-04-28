<?php

namespace App\Http\Controllers\auth;


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;



class loginApiController extends Controller
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
        // Get user from email
        $user = User::where('email', $request->email)->first();

        // Login by creating a token
        if (!empty($user) && Hash::check($request->password, $user->password)) {
            $token = $user->createToken('Auth Token')->accessToken;

            return response()->json([
                'data' => array(
                    'token' => $token
                ),
                "message" => "User Authorized!",
                "error" => array()
            ], 200);
        }

        return response()->json([
            'data' => array(),
            "message" => "",
            "error" => array("User Authorization Failed!")
        ], 400);
    }
}