<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.penyakit', [
            'daftarPenyakit' => Penyakit::orderBy('nama')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $data = request()->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'cara_penanganan' => 'required',
            'jenis' => 'required',
        ]);

        Penyakit::create($data);

        return redirect()->back()->with('success', 'Berhasil menambah data penyakit');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penyakit $penyakit)
    {
        return view('pages.penyakit-edit', compact('penyakit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Penyakit $penyakit)
    {
        $data = request()->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'cara_penanganan' => 'required',
            'jenis' => 'required',
        ]);

        $penyakit->update($data);

        return redirect()->route('penyakit.index')->with('success', 'Update data penyakit berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penyakit $penyakit)
    {
        $penyakit->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus data penyakit');
    }
}
