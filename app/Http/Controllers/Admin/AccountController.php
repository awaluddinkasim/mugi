<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {
        return view('pages.profil');
    }

    public function update()
    {
        $data = request()->validate([
            'nama' => 'required',
            'email' => 'required',
            'password' => 'nullable',
        ]);

        if ($data['password']) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }

        $admin = Admin::find(auth()->user()->id);
        $admin->update($data);

        return redirect()->back()->with('success', 'Update profile berhasil');
    }
}
