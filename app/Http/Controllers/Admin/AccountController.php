<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('pages.profil');
    }

    public function update()
    {
        return redirect()->back()->with('success', 'Update profile berhasil');
    }
}
