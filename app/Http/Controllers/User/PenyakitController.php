<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\HasilDiagnosa;
use App\Models\Diagnosa;
use App\Models\Penyakit;
use App\Models\Result;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    public function hasil(): JsonResponse
    {
        return response()->json([
            'message' => 'success',
            'diagnosa' => HasilDiagnosa::collection(User::find(request()->user()->id)->diagnosa)
        ], 200);
    }

    public function diagnosa(): JsonResponse
    {
        $gejalaPengguna = request()->validate(['gejala' => 'required|array']);

        $daftarPenyakit = Penyakit::with('gejala')->get();
        $possibleDiagnoses = [];

        foreach ($daftarPenyakit as $penyakit) {
            $gejalaPenyakit = $penyakit->gejala->pluck('id')->toArray();
            $gejalaCocok = array_intersect($gejalaPenyakit, $gejalaPengguna);

            $persentaseCocok = count($gejalaCocok) / count($gejalaPenyakit);

            if ($persentaseCocok > 0) {
                $possibleDiagnoses[] = [
                    'penyakit' => $penyakit,
                    'persentase' => $persentaseCocok,
                ];
            }
        }

        usort($possibleDiagnoses, function ($a, $b) {
            return $b['persentase'] - $a['persentase'];
        });

        $diagnosa = new Diagnosa();
        $diagnosa->user_id = request()->user()->id;
        $diagnosa->save();

        foreach ($possibleDiagnoses as $hasil) {
            $result = new Result();
            $result->diagnosa_id = $diagnosa->id;
            $result->penyakit_id = $hasil['penyakit']->id;
            $result->persentase = $hasil['persentase'] * 100;
            $result->save();
        }

        return response()->json([
            'message' => 'success',
            'diagnosa' => new HasilDiagnosa($diagnosa)
        ], 200);
    }
}
