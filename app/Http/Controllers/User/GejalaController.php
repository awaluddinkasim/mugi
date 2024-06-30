<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\GejalaResource;
use App\Models\Gejala;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    public function get(): JsonResponse
    {
        return response()->json([
            'message' => 'success',
            'daftarGejala' => GejalaResource::collection(Gejala::has('penyakit')->get())
        ], 200);
    }
}
