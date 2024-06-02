<?php

namespace App\Livewire;

use App\Models\Penyakit;
use Illuminate\View\View;
use Livewire\Component;

class RelasiPenyakit extends Component
{
    public $selectedPenyakit;

    public function gantiPenyakit(): void
    {
        $this->dispatch('ganti-penyakit', id: $this->selectedPenyakit);
    }

    public function render(): View
    {
        return view('livewire.relasi-penyakit', [
            'daftarPenyakit' => Penyakit::with(['gejala'])->orderBy('nama')->get(),
        ]);
    }
}
