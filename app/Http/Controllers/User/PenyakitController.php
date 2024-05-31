<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\PenyakitResource;
use App\Models\Penyakit;
use App\Models\Relasi;
use App\Models\Result;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    public function get(): JsonResponse
    {
        return response()->json([
            'message' => 'success',
            'daftarPenyakit' => PenyakitResource::collection(Penyakit::orderBy('nama')->get())
        ], 200);
    }

    public function diagnosa(): JsonResponse
    {
        $gejalaPengguna = request()->validate(['gejala' => 'required']);

        $relasi = Relasi::all();

        $penyakitCount = [];

        foreach ($relasi as $aturan) {
            $gejalaAturan = $aturan->gejala_id;

            $gejalaDitemukan = true;
            foreach ($gejalaAturan as $gejala) {
                if (!in_array($gejala, $gejalaPengguna)) {
                    $gejalaDitemukan = false;
                    break;
                }
            }

            if ($gejalaDitemukan) {
                $penyakit = $aturan->penyakit_id;
                $totalGejalaPenyakit = count(Relasi::where('penyakit_id', $penyakit)->get()->pluck('gejala_id')->flatten()->unique());

                $minJumlahGejala = ceil(0.5 * $totalGejalaPenyakit);

                $jumlahGejalaCocok = count($gejalaAturan);

                if ($jumlahGejalaCocok >= $minJumlahGejala) {
                    if (!isset($penyakitCount[$penyakit])) {
                        $penyakitCount[$penyakit] = 1;
                    } else {
                        $penyakitCount[$penyakit]++;
                    }
                }
            }
        }

        arsort($penyakitCount);
        $penyakitTerbanyak = key($penyakitCount);

        $hasilDiagnosa = new Result();
        $hasilDiagnosa->user_id = auth()->user()->id;
        $hasilDiagnosa->penyakit_id = $penyakitTerbanyak;
        $hasilDiagnosa->save();

        $penyakit = Penyakit::find($penyakitTerbanyak);

        return response()->json([
            'hasil' => $penyakit
        ], 200);
    }
}
