<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function index()
    {
        // return User::paginate(10);
        return new UserCollection(User::paginate(10));
    }

    public function show($id)
    {
        return new UserResource(User::find($id));
    }
}
