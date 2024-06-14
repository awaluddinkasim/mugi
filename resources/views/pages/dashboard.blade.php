<x-layout>
    <div class="row">
        <div class="col-md-4">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Jumlah Pengguna</span>
                    <h4 class="mb-3">
                        <span>{{ $users }}</span>
                    </h4>
                </div>
            </div><!-- end card -->
        </div>
        <div class="col-md-4">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Jumlah Data Penyakit</span>
                    <h4 class="mb-3">
                        <span>{{ $penyakit }}</span>
                    </h4>
                </div>
            </div><!-- end card -->
        </div>
        <div class="col-md-4">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Jumlah Data Gejala</span>
                    <h4 class="mb-3">
                        <span>{{ $gejala }}</span>
                    </h4>
                </div>
            </div><!-- end card -->
        </div>
    </div>
</x-layout>
