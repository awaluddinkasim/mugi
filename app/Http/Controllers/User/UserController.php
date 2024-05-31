<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function get(): JsonResponse
    {
        return response()->json([
            'message' => 'success',
            'user' => new UserResource(request()->user())
        ], 200);
    }

    public function store(): JsonResponse
    {
        $data = request()->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'jk' => 'required',
            'no_hp' => 'required',
        ]);

        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);

        return response()->json([
            'message' => 'success',
            'user' => new UserResource($user)
        ], 200);
    }

    public function update(): JsonResponse
    {
        $data = request()->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'nullable',
            'jk' => 'required',
            'no_hp' => 'required',
        ]);

        if ($data['password']) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        User::find(request()->user()->id)->update($data);

        return response()->json([
            'message' => 'success',
            'user' => new UserResource(User::find(request()->user()->id))
        ], 200);
    }
}
