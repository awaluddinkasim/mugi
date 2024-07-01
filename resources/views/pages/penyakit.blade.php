@push('styles')
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
@endpush

@push('scripts')
    <!-- Required datatable js -->
    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <script>
        $("#datatable").DataTable({
            ordering: false
        })
    </script>
@endpush

<x-layout title="Data Penyakit">
    <div class="row">
        <div class="col-lg-6 text-center d-none d-lg-block">
            <img src="{{ asset('assets/images/penyakit.svg') }}" alt="" class="w-75">
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <x-form.modal title="Tambah Data Penyakit" action="{{ route('penyakit.store') }}">
                        <x-form.input label="Nama Penyakit" id="penyakitInput" name="nama" :required="true" />
                        <x-form.textarea label="Solusi" id="solusiInput" name="solusi"
                            :required="true"></x-form.textarea>
                    </x-form.modal>

                    <div class="table-responsive">
                        <table id="datatable" class="table table-hover dt-responsive  nowrap w-100">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Penyakit</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($daftarPenyakit as $penyakit)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $penyakit->nama }}</td>
                                        <td class="text-center">
                                            <button class="btn btn-primary btn-sm"
                                                onclick="document.location.href = '{{ route('penyakit.edit', $penyakit->id) }}'">Edit</button>
                                            <form action="{{ route('penyakit.destroy', $penyakit->id) }}"
                                                method="post" class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger btn-sm">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
