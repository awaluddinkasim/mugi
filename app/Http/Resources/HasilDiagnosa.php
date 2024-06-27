<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HasilDiagnosa extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'tanggal' => Carbon::parse($this->created_at)->isoFormat('DD MMMM YYYY'),
            'hasil' => [
                'penyakit' => new PenyakitResource($this->hasil->penyakit),
                'persentase' => $this->hasil->persentase
            ],
        ];
    }
}
