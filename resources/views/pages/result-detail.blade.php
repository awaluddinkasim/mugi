<x-layout title="Detail Hasil Diagnosa">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h3 class="mb-3">Detail Pengguna</h3>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-lg-3 col-form-label">Email</label>
                        <div class="col-lg-9">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                                value="{{ $diagnosa->user->email }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticNama" class="col-lg-3 col-form-label">Nama</label>
                        <div class="col-lg-9">
                            <input type="text" readonly class="form-control-plaintext" id="staticNama"
                                value="{{ $diagnosa->user->nama }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticJk" class="col-lg-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-lg-9">
                            <input type="text" readonly class="form-control-plaintext" id="staticJk"
                                value="{{ $diagnosa->user->jk }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticNoHp" class="col-lg-3 col-form-label">No. HP</label>
                        <div class="col-lg-9">
                            <input type="text" readonly class="form-control-plaintext" id="staticNoHp"
                                value="{{ $diagnosa->user->no_hp }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    @if ($diagnosa->hasil->count())
                        <table class="table">
                            <thead>
                                <th>#</th>
                                <th>Penyakit</th>
                                <th>Kecocokan Gejala</th>
                            </thead>
                            <tbody>
                                @foreach ($diagnosa->hasil as $hasil)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $hasil->penyakit->nama }}</td>
                                        <td>{{ $hasil->persentase }}%</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="text-center">
                            <img src="{{ asset('assets/images/healthy.svg') }}" alt="" style="width: 300px"
                                class="mb-3">
                            <p class="text-center pb-5">Tidak ada penyakit ditemukan</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layout>
