<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DiagnosaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $waktu = $this->created_at ?? Carbon::now();

        return [
            'tanggal' => Carbon::parse($waktu)->isoFormat('DD MMMM YYYY'),
            'pukul' => Carbon::parse($waktu)->isoFormat('HH:mm'),
            'hasil' => HasilResource::collection($this->hasil),
        ];
    }
}
