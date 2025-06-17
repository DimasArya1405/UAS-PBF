@extends('layout/layout')

@section('content')
<div class="max-w-4xl mx-auto mt-8 p-6 bg-gray-800 border border-gray-700 rounded-lg text-white shadow-md">
    <h1 class="text-2xl font-bold mb-6">Tambah Data Mahasiswa</h1>

    <form method="POST" action="{{ route('mahasiswa.store') }}" class="space-y-4">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="npm" class="block text-sm mb-1">NPM</label>
                <input type="text" name="npm" id="npm" class="w-full px-3 py-2 bg-gray-900 border border-gray-600 rounded focus:outline-none" required>
            </div>

            <div>
                <label for="id_user" class="block text-sm mb-1">ID User</label>
                <input type="number" name="id_user" id="id_user" class="w-full px-3 py-2 bg-gray-900 border border-gray-600 rounded focus:outline-none" required>
            </div>

            <div>
                <label for="id_dosen" class="block text-sm mb-1">ID Dosen Wali</label>
                <input type="number" name="id_dosen" id="id_dosen" class="w-full px-3 py-2 bg-gray-900 border border-gray-600 rounded focus:outline-none" required>
            </div>

            <div>
                <label for="id_kajur" class="block text-sm mb-1">ID Kajur</label>
                <input type="number" name="id_kajur" id="id_kajur" class="w-full px-3 py-2 bg-gray-900 border border-gray-600 rounded focus:outline-none" required>
            </div>

            <div>
                <label for="nama_mahasiswa" class="block text-sm mb-1">Nama Mahasiswa</label>
                <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" class="w-full px-3 py-2 bg-gray-900 border border-gray-600 rounded focus:outline-none" required>
            </div>

            <div>
                <label for="tempat_tanggal_lahir" class="block text-sm mb-1">Tempat Tanggal Lahir</label>
                <input type="text" name="tempat_tanggal_lahir" id="tempat_tanggal_lahir" class="w-full px-3 py-2 bg-gray-900 border border-gray-600 rounded focus:outline-none" required>
            </div>

            <div>
                <label for="jenis_kelamin" class="block text-sm mb-1">Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="w-full px-3 py-2 bg-gray-900 border border-gray-600 rounded focus:outline-none" required>
            </div>

            <div>
                <label for="alamat" class="block text-sm mb-1">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="w-full px-3 py-2 bg-gray-900 border border-gray-600 rounded focus:outline-none" required>
            </div>

            <div>
                <label for="agama" class="block text-sm mb-1">Agama</label>
                <input type="text" name="agama" id="agama" class="w-full px-3 py-2 bg-gray-900 border border-gray-600 rounded focus:outline-none" required>
            </div>

            <div>
                <label for="angkatan" class="block text-sm mb-1">Angkatan</label>
                <input type="number" name="angkatan" id="angkatan" class="w-full px-3 py-2 bg-gray-900 border border-gray-600 rounded focus:outline-none" required>
            </div>

            <div>
                <label for="program_studi" class="block text-sm mb-1">Program Studi</label>
                <input type="text" name="program_studi" id="program_studi" class="w-full px-3 py-2 bg-gray-900 border border-gray-600 rounded focus:outline-none" required>
            </div>

            <div>
                <label for="semester" class="block text-sm mb-1">Semester</label>
                <input type="number" name="semester" id="semester" class="w-full px-3 py-2 bg-gray-900 border border-gray-600 rounded focus:outline-none" required>
            </div>

            <div>
                <label for="no_hp" class="block text-sm mb-1">No HP</label>
                <input type="text" name="no_hp" id="no_hp" class="w-full px-3 py-2 bg-gray-900 border border-gray-600 rounded focus:outline-none" required>
            </div>

            <div>
                <label for="email" class="block text-sm mb-1">Email</label>
                <input type="email" name="email" id="email" class="w-full px-3 py-2 bg-gray-900 border border-gray-600 rounded focus:outline-none" required>
            </div>
        </div>

        <div class="mt-6 flex justify-end">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 transition text-white px-6 py-2 rounded shadow">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection
