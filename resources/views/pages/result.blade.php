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


<x-layout title="Hasil Diagnosa">
    <div class="card">
        <div class="card-body">
            <table id="datatable" class="table table-hover dt-responsive  nowrap w-100">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Pengguna</th>
                        <th>Tanggal Diagnosa</th>
                        <th>Pukul</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daftarDiagnosa as $diagnosa)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $diagnosa->user->nama }}</td>
                            <td>{{ Carbon\Carbon::parse($diagnosa->created_at)->isoFormat('DD MMMM YYYY') }}</td>
                            <td>{{ Carbon\Carbon::parse($diagnosa->created_at)->isoFormat('HH:mm') }}</td>
                            <td class="text-center">
                                <button class="btn btn-primary btn-sm"
                                    onclick="document.location.href = '{{ route('hasil.show', $diagnosa->id) }}'">
                                    Lihat
                                </button>
                                <form action="{{ route('hasil.destroy', $diagnosa->id) }}" method="post"
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
</x-layout>
