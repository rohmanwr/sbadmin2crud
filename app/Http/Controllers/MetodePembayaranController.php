<?php

namespace App\Http\Controllers;

use App\Models\MetodePembayaran;
use Illuminate\Http\Request;

class MetodePembayaranController extends Controller
{
    public function index()
    {
        $metode = MetodePembayaran::all();
        return view('metode.index', compact('metode'));
    }

    public function create()
    {
        return view('metode.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis' => 'required',
            'nama_metode' => 'nullable|string',
            'nomor_kartu' => 'nullable|string',
            'kelas_perawatan' => 'nullable|string',
        ]);

        MetodePembayaran::create($request->all());

        return redirect()->route('metode.index')->with('success', 'Metode pembayaran berhasil ditambahkan');
    }

    public function edit(MetodePembayaran $metode)
    {
        return view('metode.edit', compact('metode'));
    }

    public function update(Request $request, MetodePembayaran $metode)
    {
        $request->validate([
            'jenis' => 'required',
            'nama_metode' => 'nullable|string',
            'nomor_kartu' => 'nullable|string',
            'kelas_perawatan' => 'nullable|string',
        ]);

        $metode->update($request->all());

        return redirect()->route('metode.index')->with('success', 'Metode pembayaran berhasil diupdate');
    }

    public function destroy(MetodePembayaran $metode)
    {
        $metode->delete();
        return redirect()->route('metode.index')->with('success', 'Metode pembayaran berhasil dihapus');
    }
}
