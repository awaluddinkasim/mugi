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

<x-layout title="Data Gejala">
    <div class="row">
        <div class="col-lg-6 text-center d-none d-lg-block">
            <img src="{{ asset('assets/images/gejala.svg') }}" alt="" class="w-75">
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <x-form.modal title="Tambah Data Gejala" action="{{ route('gejala.store') }}">
                        <x-form.input label="Nama Gejala" id="gejalaInput" name="nama" :required="true" />
                    </x-form.modal>

                    <table id="datatable" class="table table-hover dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Gejala</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($daftarGejala as $gejala)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $gejala->nama }}</td>
                                    <td class="text-center">
                                        <button class="btn btn-primary btn-sm"
                                            onclick="document.location.href = '{{ route('gejala.edit', $gejala->id) }}'">Edit</button>
                                        <form action="{{ route('gejala.destroy', $gejala->id) }}" method="post"
                                            class="d-inline">
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
</x-layout>
