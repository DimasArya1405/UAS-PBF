@extends('layout/layout')

@section('content')
<div class="max-w-4xl mx-auto mt-8 p-6 bg-gray-800 border border-gray-700 rounded-lg text-white shadow-md">
    <h1 class="text-2xl font-bold mb-6">Edit Dosen</h1>

    <form method="POST" action="{{ route('dosen.update', $dosen['id_dosen']) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="npm" class="block text-sm mb-1">Nama</label>
                <input type="text" name="nama_dosen" id="npm" class="w-full px-3 py-2 bg-gray-900 border border-gray-600 rounded focus:outline-none" value="{{ $dosen['nama_dosen'] }}" required>
            </div>
            <div>
                <label for="npm" class="block text-sm mb-1">NIDN</label>
                <input type="text" name="nidn" id="npm" class="w-full px-3 py-2 bg-gray-900 border border-gray-600 rounded focus:outline-none" value="{{ $dosen['nidn'] }}" required>
            </div>
            <div>
                <label for="npm" class="block text-sm mb-1">User</label>
                <input type="text" name="id_user" id="npm" class="w-full px-3 py-2 bg-gray-900 border border-gray-600 rounded focus:outline-none" value="{{ $dosen['id_user'] }}" required>
            </div>

        <div class="mt-6 flex justify-end">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 transition text-white px-6 py-2 rounded shadow">
                Update
            </button>
        </div>
    </form>
</div>
@endsection
