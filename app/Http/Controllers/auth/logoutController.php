<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class logoutController extends Controller
{
  //Logout
  public function logout()
  {
    // return view('auth.login');
    return  redirect()->route('home');
  }
}