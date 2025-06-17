@extends('layout/layout')

@section('content')

    <div class="flex flex-col gap-4">
        <div class="flex gap-4 w-full">
            <div class="flex justify-center flex-col bg-gray-800 border w-52 border-gray-700 p-3 rounded-md gap-1">
                <div class=" text-3xl font-bold">{{ count($dosen) }}</div>
                <div class="text-md">Data Dosen</div>
            </div>
            @php
                use Carbon\Carbon;
                $tanggal = Carbon::now()->locale('id')->isoFormat('dddd, D MMMM Y');
            @endphp

            <div class=" bg-gray-800 border border-gray-700 p-3 rounded-md text-white text-sm flex justify-between px-4 py-2 w-full float-right shadow">
                <div class="font-semibold text-center text-2xl h-full flex items-center pl-3">Data Dosen</div>
                <div>
                    📅 Hari ini: <span class="font-semibold">{{ $tanggal }}</span>
                </div>
            </div>



        </div>

        <div class="flex gap-4 justify-between items-center">
            <button type="button" onclick="window.location.href = '{{ route('dosen.create') }}';
      "
                class="bg-gray-700 text-white px-4 py-2 rounded hover:scale-105 cursor-pointer transition duration-200 ease-in-out w-60 flex justify-center gap-2">
                <i class="bi bi-file-earmark-plus"></i>
                <div>Tambah Data Dosen</div>
            </button>
            <div class="flex gap-2">

                <form action="{{ route('dosen.index') }}" method="GET" class="flex gap-2">
                    <input type="text" name="search" placeholder="Cari dosen..." value="{{ request('search') }}"
                        class="border border-gray-600 rounded px-3 w-92 py-2 bg-gray-900 text-white focus:outline-none">
                    <button type="submit" class="bg-gray-700 text-white px-4 py-2 rounded hover:bg-gray-800 transition">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
                <a href="{{ route('dosen.index') }}"
                    class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition">
                    Reset
                </a>
            </div>
        </div>
        <div class="w-full bg-gray-800 rounded-md border border-gray-700 overflow-x-scroll">
            <table>
                <tr>
                    <th class="px-2 py-1 border border-gray-700">Nama</th>
                    <th class="px-2 py-1 border border-gray-700">NIDN</th>
                    <th class="px-2 py-1 border border-gray-700">Id User</th>
                    <th class="px-2 py-1 border border-gray-700">Aksi</th>
                </tr>
                @if (count($dosen) > 0)
                    @foreach ($dosen as $item)
                        <tr class="hover:bg-gray-800 transition duration-150 ease-in-out border-b border-gray-700">
                            <td class="px-4 py-2">{{ $item['nama_dosen'] }}</td>
                            <td class="px-4 py-2">{{ $item['nidn'] }}</td>
                            <td class="px-4 py-2">{{ $item['id_user'] }}</td>
                            <td class="px-4 py-2">
                                <div class="flex gap-2">
                                    <a href="{{ route('dosen.edit', $item['id_dosen']) }}"
                                        class="px-3 py-1 bg-gray-700 text-white rounded hover:bg-gray-900 transition cursor-pointer duration-150 ease-in-out text-center">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>


                                    <form method="POST" action="{{ route('dosen.destroy', $item['id_dosen']) }}">
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
