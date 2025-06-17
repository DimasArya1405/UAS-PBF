@extends('layout/layout')

@section('content')
<div class="p-6">
    <!-- Judul & Tanggal -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-white">Dashboard</h1>
        <div class="bg-gray-700 text-white text-sm rounded px-4 py-2 shadow">
            📅 Hari ini: <span class="font-semibold">{{ \Carbon\Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y') }}</span>
        </div>
    </div>

    <!-- Info Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <div class="bg-gray-800 rounded-xl p-4 shadow hover:shadow-lg transition">
            <h2 class="text-gray-400 text-sm">Total Mahasiswa</h2>
            <p class="text-3xl font-bold text-white mt-2">124</p>
        </div>
        <div class="bg-gray-800 rounded-xl p-4 shadow hover:shadow-lg transition">
            <h2 class="text-gray-400 text-sm">Dosen Wali</h2>
            <p class="text-3xl font-bold text-white mt-2">15</p>
        </div>
        <div class="bg-gray-800 rounded-xl p-4 shadow hover:shadow-lg transition">
            <h2 class="text-gray-400 text-sm">Pengguna</h2>
            <p class="text-3xl font-bold text-white mt-2">8</p>
        </div>
        <div class="bg-gray-800 rounded-xl p-4 shadow hover:shadow-lg transition">
            <h2 class="text-gray-400 text-sm">Login Terakhir</h2>
            <p class="text-white mt-2">17 Juni 2025, 14:20</p>
        </div>
    </div>

    <!-- Quick Links -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <a href="{{ route('mahasiswa.index') }}" class="bg-blue-600 hover:bg-blue-700 text-white text-center py-4 rounded-xl shadow transition font-medium">
            📚 Kelola Mahasiswa
        </a>
        <a href="{{ route('dosen.index') }}" class="bg-green-600 hover:bg-green-700 text-white text-center py-4 rounded-xl shadow transition font-medium">
            👨‍🏫 Kelola Dosen Wali
        </a>
        <a href="#" class="bg-yellow-500 hover:bg-yellow-600 text-white text-center py-4 rounded-xl shadow transition font-medium">
            ⚙️ Pengaturan Sistem
        </a>
    </div>
</div>
@endsection
