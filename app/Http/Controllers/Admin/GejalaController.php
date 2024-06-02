<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gejala;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.gejala', [
            'daftarGejala' => Gejala::orderBy('nama')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $data = request()->validate([
            'nama' => 'required',
        ]);

        Gejala::create($data);

        return redirect()->back()->with('success', 'Berhasil menambah data gejala');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gejala $gejala)
    {
        return view('pages.gejala-edit', compact('gejala'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Gejala $gejala)
    {
        $data = request()->validate([
            'nama' => 'required',
        ]);

        $gejala->update($data);

        return redirect()->route('gejala.index')->with('success', 'Update data gejala berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gejala $gejala)
    {
        $gejala->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus data gejala');
    }
}
