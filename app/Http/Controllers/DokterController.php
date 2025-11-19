<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Spesialis;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        $dokters = Dokter::with('spesialis')->get();
        return view('dokter.index', compact('dokters'));
    }

    public function create()
    {
        $spesialis = Spesialis::all();
        return view('dokter.create', compact('spesialis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'spesialis_id' => 'required',
            'telepon' => 'nullable',
        ]);

        Dokter::create([
            'nama' => $request->nama,
            'spesialis_id' => $request->spesialis_id,
            'telepon' => $request->telepon,
        ]);

        return redirect()->route('dokter.index')->with('success', 'Data dokter berhasil ditambahkan');
    }

    public function edit($id)
    {
        $dokter = Dokter::findOrFail($id);
        $spesialis = Spesialis::all();
        return view('dokter.edit', compact('dokter', 'spesialis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'spesialis_id' => 'required',
            'telepon' => 'nullable',
        ]);

        $dokter = Dokter::findOrFail($id);

        $dokter->update([
            'nama' => $request->nama,
            'spesialis_id' => $request->spesialis_id,
            'telepon' => $request->telepon,
        ]);

        return redirect()->route('dokter.index')->with('success', 'Data dokter berhasil diperbarui');
    }

    public function destroy($id)
    {
        $dokter = Dokter::findOrFail($id);
        $dokter->delete();

        return redirect()->route('dokter.index')->with('success', 'Data dokter berhasil dihapus');
    }
}
