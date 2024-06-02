<div>
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label" for="penyakitSelect">Penyakit</label>
                <select class="form-select" name="penyakit" id="penyakitSelect" wire:model.live="selectedPenyakit"
                    wire:change="gantiPenyakit">
                    <option value="" selected hidden>Pilih</option>
                    @foreach ($daftarPenyakit as $penyakit)
                        <option value="{{ $penyakit->id }}">{{ $penyakit->nama }}</option>
                    @endforeach
                </select>
            </div>

        </div>
    </div>
</div>
