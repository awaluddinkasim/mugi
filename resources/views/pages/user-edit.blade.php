<x-layout title="Edit Pengguna">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('user.update', $user->id) }}" method="post" autocomplete="off">
                @method('PATCH')
                @csrf
                <x-form.input label="Nama" id="namaInput" name="nama" :value="$user->nama" :required="true" />
                <x-form.input label="Email" id="emailInput" name="email" :value="$user->email" :required="true" />
                <x-form.input label="Password" id="passwordInput" name="password" />
                <x-form.select label="Jenis Kelamin" id="jkInput" name="jk" :required="true">
                    <option value="Laki-laki" {{ $user->jk == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ $user->jk == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </x-form.select>
                <x-form.input label="No. HP" id="noHPInput" name="no_hp" :value="$user->no_hp" :required="true" />

                <button class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</x-layout>
