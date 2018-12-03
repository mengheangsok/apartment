<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function changeLocal($local)
    {
        session()->put('local',$local);

        return redirect()->back();
    }
}
