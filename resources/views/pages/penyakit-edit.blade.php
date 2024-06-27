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
                        <x-form.textarea label="Solusi" id="solusiInput" name="solusi"
                            :required="true">{{ $penyakit->solusi }}</x-form.textarea>

                        <button class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
