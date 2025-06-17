@extends('layout/layout')

@section('content')

    <div class="flex flex-col gap-4">
        <div class="grid grid-cols-5 gap-3 w-full">
            <div class="flex justify-center flex-col bg-gray-800 border border-gray-700 p-3 rounded-md gap-1">
                <div class=" text-3xl font-bold">{{ count($mahasiswa) }}</div>
                <div class="text-md">Data Mahasiswa</div>
            </div>
            <div class="flex justify-center flex-col bg-gray-800 border border-gray-700 p-3 rounded-md gap-1">
                <div class=" text-3xl font-bold">10</div>
                <div class="text-md">Data Mahasiswa</div>
            </div>
            <div class="flex justify-center flex-col bg-gray-800 border border-gray-700 p-3 rounded-md gap-1">
                <div class=" text-3xl font-bold">10</div>
                <div class="text-md">Data Mahasiswa</div>
            </div>
            <div class="flex justify-center flex-col bg-gray-800 border border-gray-700 p-3 rounded-md gap-1">
                <div class=" text-3xl font-bold">10</div>
                <div class="text-md">Data Mahasiswa</div>
            </div>
            <div class="flex justify-center flex-col bg-gray-800 border border-gray-700 p-3 rounded-md gap-1">
                <div class=" text-3xl font-bold">10</div>
                <div class="text-md">Data Mahasiswa</div>
            </div>
        </div>

        <div class="flex gap-4 justify-between items-center">
            <button type="button" onclick="window.location.href = '{{ route('mahasiswa.create') }}';
      "
                class="bg-gray-700 text-white px-4 py-2 rounded hover:scale-105 cursor-pointer transition duration-200 ease-in-out w-60 flex justify-center gap-2">
                <i class="bi bi-file-earmark-plus"></i>
                <div>Tambah Data Mahasiswa</div>
            </button>
            <div class="flex gap-2">

                <form action="{{ route('mahasiswa.index') }}" method="GET" class="flex gap-2">
                    <input type="text" name="search" placeholder="Cari mahasiswa..." value="{{ request('search') }}"
                        class="border border-gray-600 rounded px-3 w-92 py-2 bg-gray-900 text-white focus:outline-none">
                    <button type="submit" class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-800 transition">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
                <a href="{{ route('mahasiswa.index') }}"
                    class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition">
                    Reset
                </a>
            </div>
        </div>
        <div class="w-full bg-gray-800 rounded-md border border-gray-700 overflow-x-scroll">
            <table>
                <tr>
                    <th class="px-2 py-1 border border-gray-700">NPM</th>
                    <th class="px-2 py-1 border border-gray-700">Nama</th>
                    <th class="px-2 py-1 border border-gray-700">TTL</th>
                    <th class="px-2 py-1 border border-gray-700">Gender</th>
                    <th class="px-2 py-1 border border-gray-700">Alamat</th>
                    <th class="px-2 py-1 border border-gray-700">Agama</th>
                    <th class="px-2 py-1 border border-gray-700">Angkatan</th>
                    <th class="px-2 py-1 border border-gray-700">Prodi</th>
                    <th class="px-2 py-1 border border-gray-700">Semester</th>
                    <th class="px-2 py-1 border border-gray-700">No HP</th>
                    <th class="px-2 py-1 border border-gray-700">Email</th>
                    <th class="px-2 py-1 border border-gray-700">Aksi</th>
                </tr>
                @if (count($mahasiswa) > 0)
                    @foreach ($mahasiswa as $item)
                        <tr class="hover:bg-gray-800 transition duration-150 ease-in-out border-b border-gray-700">
                            <td class="px-4 py-2">{{ $item['npm'] }}</td>
                            <td class="px-4 py-2">{{ $item['nama_mahasiswa'] }}</td>
                            <td class="px-4 py-2">{{ $item['tempat_tanggal_lahir'] }}</td>
                            <td class="px-4 py-2">{{ $item['jenis_kelamin'] }}</td>
                            <td class="px-4 py-2">{{ $item['alamat'] }}</td>
                            <td class="px-4 py-2">{{ $item['agama'] }}</td>
                            <td class="px-4 py-2">{{ $item['angkatan'] }}</td>
                            <td class="px-4 py-2">{{ $item['program_studi'] }}</td>
                            <td class="px-4 py-2">{{ $item['semester'] }}</td>
                            <td class="px-4 py-2">{{ $item['no_hp'] }}</td>
                            <td class="px-4 py-2">{{ $item['email'] }}</td>
                            <td class="px-4 py-2">
                                <div class="flex gap-2">
                                    <a href="{{ route('mahasiswa.edit', $item['npm']) }}"
                                        class="px-3 py-1 bg-gray-700 text-white rounded hover:bg-gray-900 transition cursor-pointer duration-150 ease-in-out text-center">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>


                                    <form method="POST" action="{{ route('mahasiswa.destroy', $item['npm']) }}"
                                    >
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Yakin ingin hapus?')"
                                            class="px-3 py-1 bg-gray-700 text-white rounded hover:bg-gray-900 transition cursor-pointer duration-150 ease-in-out">
                                            <i class="bi bi-trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" class="text-center py-4">Data tidak ada</td>
                    </tr>
                @endif
            </table>
        </div>
    </div>



    </div>


@endsection
