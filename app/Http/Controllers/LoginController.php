<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            // Authentication passed...

            if(Auth::user()->status == 'inactive'){
                Auth::logout();

                return redirect('/login')->withMessage('Your account is inactive');
            }

            return redirect()->intended('home');
        }
    }
}
