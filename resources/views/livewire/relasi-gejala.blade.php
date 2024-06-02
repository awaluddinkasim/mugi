<div>
    <div class="card">
        <div class="card-body">
            @if ($addMode)
                <form wire:submit="save" autocomplete="off" class="row mb-3">
                    @csrf
                    <div class="col-md-9">
                        <select class="form-select" name="gejala_id" id="gejalaSelect" wire:model.live="selectedGejala">
                            <option value="" selected hidden>Pilih</option>
                            @foreach ($daftarGejala as $gejala)
                                <option value="{{ $gejala->id }}">{{ $gejala->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary waves-effect waves-light col-md-3">Submit</button>
                </form>
            @else
                <button type="button" class="btn btn-primary waves-effect waves-light mb-3" wire:click="add"
                    @if (!$selectedPenyakit) disabled @endif>Tambah</button>
            @endif


            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Gejala</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($daftarRelasi as $relasi)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $relasi->gejala->nama }}</td>
                                <td class="text-center">
                                    <form wire:submit="delete({{ $relasi->id }})">
                                        @csrf
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center text-muted" colspan="3">Tidak ada data gejala</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
