<x-layout title="Edit Gejala">
    <div class="row">
        <div class="col-md-6 text-center">
            <img src="{{ asset('assets/images/edit.svg') }}" alt="" class="w-75">
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('gejala.update', $gejala->id) }}" method="post" autocomplete="off">
                        @method('PATCH')
                        @csrf
                        <x-form.input label="Nama Gejala" id="gejalaInput" name="nama" :value="$gejala->nama"
                            :required="true" />

                        <button class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
