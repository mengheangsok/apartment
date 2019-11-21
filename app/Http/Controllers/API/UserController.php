<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\User;

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
