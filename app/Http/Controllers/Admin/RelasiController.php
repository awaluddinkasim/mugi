<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Relasi;
use Illuminate\Http\Request;

class RelasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.relasi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $data = request()->validate([
            'gejala_id' => 'required',
            'penyakit_id' => 'required'
        ]);

        Relasi::create($data);

        return redirect()->back()->with('success', 'Berhasil menambah relasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Relasi $relasi)
    {
        $relasi->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus relasi');
    }
}
