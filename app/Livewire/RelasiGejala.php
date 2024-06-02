<?php

namespace App\Livewire;

use App\Models\Gejala;
use App\Models\Relasi;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class RelasiGejala extends Component
{
    public $addMode = false;

    public $selectedPenyakit;
    public $selectedGejala;

    #[On('ganti-penyakit')]
    public function updateGejala($id): void
    {
        $this->selectedPenyakit = $id;
    }

    public function add(): void
    {
        if ($this->selectedPenyakit) {
            $this->addMode = true;
        }
    }

    public function save(): void
    {
        $data = [
            'penyakit_id' => $this->selectedPenyakit,
            'gejala_id' => $this->selectedGejala
        ];

        Relasi::create($data);

        $this->addMode = false;
        $this->selectedGejala = "";
    }

    public function delete($gejala)
    {
        Relasi::find($gejala)->delete();

        $this->dispatch('$refresh');
    }

    public function render(): View
    {
        return view('livewire.relasi-gejala', [
            'daftarRelasi' => Relasi::where('penyakit_id', $this->selectedPenyakit)->get(),
            'daftarGejala' => Gejala::orderBy('nama')->get()
        ]);
    }
}
