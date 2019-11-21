<?php

namespace App\Http\Controllers;

class ConfigController extends Controller
{
    public function changeLocal($local)
    {
        session()->put('local', $local);

        return redirect()->back();
    }
}
