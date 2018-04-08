<?php

namespace App\Http\Controllers\Api;

use App\User;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::all();
        return UserResource::collection($users);
    }

    public function show(User $user)
    {
        return new UserResource($user);
    }

    public function store(Request $request)
    {
        $user = $this->validate( $request, [
            'name'  => 'required|min:3|max:50',
            'email' => 'required|email',
            'password' => 'required|min:8|max:50',
        ]);

        $user = User::create($user);
        return new UserResource($user);
    }
}
