<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Diagnosa;
use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.result', [
            'daftarDiagnosa' => Diagnosa::with(['hasil'])->get()
        ]);
    }

    public function show(Diagnosa $diagnosa)
    {
        return view('pages.result-detail', [
            'diagnosa' => $diagnosa,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diagnosa $diagnosa)
    {
        $diagnosa->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus hasil diagnosa');
    }
}
