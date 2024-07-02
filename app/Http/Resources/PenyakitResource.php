<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PenyakitResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'nama' => $this->nama,
            'deskripsi' => $this->deskripsi,
            'cara_penanganan' => $this->cara_penanganan,
            'jenis' => $this->jenis,
            'gejala' => GejalaResource::collection($this->gejala),
        ];
    }
}
