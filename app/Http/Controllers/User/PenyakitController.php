<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\DiagnosaResource;
use App\Models\Diagnosa;
use App\Models\Penyakit;
use App\Models\Result;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    public function hasil(): JsonResponse
    {
        $diagnosa = Diagnosa::where('user_id', request()->user()->id)->with(['hasil', 'hasil.penyakit'])->latest()->get();

        return response()->json([
            'message' => 'success',
            'diagnosa' => DiagnosaResource::collection($diagnosa)
        ], 200);
    }

    public function diagnosa(): JsonResponse
    {
        $gejalaPengguna = request()->gejala ?? [];

        $daftarPenyakit = Penyakit::has('gejala')->get();
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
            if ($a['persentase'] > $b['persentase']) {
                return -1;
            } elseif ($a['persentase'] < $b['persentase']) {
                return 1;
            } else {
                return 0;
            }
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
            'diagnosa' => new DiagnosaResource(Diagnosa::where('id', $diagnosa->id)->with(['hasil', 'hasil.penyakit'])->first())
        ], 200);
    }
}
