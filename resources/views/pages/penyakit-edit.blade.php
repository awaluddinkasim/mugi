<x-layout title="Edit Penyakit">
    <div class="row">
        <div class="col-md-6 text-center">
            <img src="{{ asset('assets/images/edit.svg') }}" alt="" class="w-75">
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('penyakit.update', $penyakit->id) }}" method="post" autocomplete="off">
                        @method('PATCH')
                        @csrf
                        <x-form.input label="Nama Penyakit" id="penyakitInput" name="nama" :value="$penyakit->nama"
                            :required="true" />
                        <x-form.textarea label="Deskripsi" id="deskripsiInput" name="deskripsi"
                            :required="true">{{ $penyakit->deskripsi }}</x-form.textarea>
                        <x-form.textarea label="Cara Penanganan" id="caraPenangananInput" name="cara_penanganan"
                            :required="true">{{ $penyakit->cara_penanganan }}</x-form.textarea>
                        <x-form.select label="Jenis Penyakit" id="jenisInput" name="jenis" :required="true">
                            <option value="Mulut" {{ $penyakit->jenis == 'Mulut' ? 'selected' : '' }}>Mulut</option>
                            <option value="Gigi" {{ $penyakit->jenis == 'Gigi' ? 'selected' : '' }}>Gigi</option>
                        </x-form.select>

                        <button class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
