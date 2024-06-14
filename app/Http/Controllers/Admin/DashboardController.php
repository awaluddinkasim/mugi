<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\User;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('pages.dashboard', [
            'users' => User::all()->count(),
            'penyakit' => Penyakit::all()->count(),
            'gejala' => Gejala::all()->count()
        ]);
    }
}
