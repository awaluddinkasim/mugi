<x-layout title="Edit Profile">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('profile.update') }}" method="post" autocomplete="off">
                @method('PATCH')
                @csrf
                <x-form.input label="Nama" id="namaInput" name="nama" :value="auth()->user()->nama" :required="true" />
                <x-form.input label="Email" id="emailInput" name="email" :value="auth()->user()->email" :required="true" />
                <x-form.input label="Password" id="passwordInput" name="password" />

                <button class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</x-layout>
