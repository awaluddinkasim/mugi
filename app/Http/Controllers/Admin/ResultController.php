<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
            'results' => Result::with(['user', 'penyakit'])->all()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Result $result)
    {
        $result->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus hasil diagnosa');
    }
}
