<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DosenController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');

        $response = Http::get('http://localhost:8080/dosen');
        $dosen = $response->json();

        if ($search) {
            $dosen = array_filter($dosen, function($item) use ($search) {
                return stripos($item['id_dosen'], $search) !== false 
                    || stripos($item['nama_dosen'], $search) !== false;
            });
        }

        // Urutkan data berdasarkan nama A-Z
        usort($dosen, function($a, $b) {
            return strcmp($a['nama_dosen'], $b['nama_dosen']);
        });

        return view('dosen.index', compact('dosen'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_dosen' => 'required|string|max:50',
            'nidn' => 'required|string|max:15',
            'id_user' => 'required|integer',
        ]);

        $response = Http::asJson()->post('http://localhost:8080/dosen', [
            'nama_dosen' => $request->nama_dosen,
            'nidn' => $request->nidn,
            'id_user' => $request->id_user,
        ]);

        if ($response->successful()) {
            return redirect()->route('dosen.index')->with('success', 'Berhasil menambahkan dosen.');
        }

        return back()->withErrors(['error' => 'Gagal menambahkan data'])->withInput();
    }

    public function edit($id_dosen)
    {
        $response = Http::get("http://localhost:8080/dosen/$id_dosen");

        if ($response->successful()) {
            $dosen = $response->json()[0];
            return view('dosen.edit', compact('dosen'));
        }

        return back()->with('error', 'Data tidak ditemukan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_dosen' => 'required|string|max:50',
            'nidn' => 'required|string|max:15',
            'id_user' => 'required|integer',
        ]);

        $response = Http::put("http://localhost:8080/dosen/$id", $request->all());

        if ($response->successful()) {
            return redirect()->route('dosen.index')->with('success', 'Berhasil mengupdate data.');
        }

        return back()->withErrors(['error' => 'Gagal mengupdate data'])->withInput();
    }

    public function destroy($id)
    {
        $response = Http::delete("http://localhost:8080/dosen/$id");

        if ($response->successful()) {
            return redirect()->route('dosen.index')->with('success', 'Berhasil menghapus data.');
        }

        return back()->with('error', 'Gagal menghapus data.');
    }
}
