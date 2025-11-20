<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Models\MetodePembayaran;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::with('metodePembayaran')->latest()->paginate(10);
        return view('pasien.index', compact('pasiens'));
    }

    public function create()
    {
        $metode = MetodePembayaran::all();
        return view('pasien.create', compact('metode'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_rm' => 'required|unique:pasiens,no_rm',
            'tanggal_lahir' => 'nullable|date',
            'jenis_kelamin' => 'nullable|in:L,P',
            'alamat' => 'nullable|string',
            'metode_pembayaran_id' => 'nullable|exists:metode_pembayaran,id',
            'keluhan' => 'nullable|string',
            'telepon' => 'nullable|string|max:20',
        ]);

        Pasien::create([
            'nama' => $request->nama,
            'no_rm' => $request->no_rm,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'metode_pembayaran_id' => $request->metode_pembayaran_id,
            'keluhan' => $request->keluhan,
            'telepon' => $request->telepon,
        ]);

        return redirect()->route('pasien.index')
            ->with('success', 'Data pasien berhasil ditambahkan.');
    }

    public function edit(Pasien $pasien)
    {
        $metode = MetodePembayaran::all();
        return view('pasien.edit', compact('pasien', 'metode'));
    }

    public function update(Request $request, Pasien $pasien)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_rm' => 'required|unique:pasiens,no_rm,' . $pasien->id,
            'tanggal_lahir' => 'nullable|date',
            'jenis_kelamin' => 'nullable|in:L,P',
            'alamat' => 'nullable|string',
            'metode_pembayaran_id' => 'nullable|exists:metode_pembayaran,id',
            'keluhan' => 'nullable|string',
            'telepon' => 'nullable|string|max:20',
        ]);

        $pasien->update([
            'nama' => $request->nama,
            'no_rm' => $request->no_rm,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'metode_pembayaran_id' => $request->metode_pembayaran_id,
            'keluhan' => $request->keluhan,
            'telepon' => $request->telepon,
        ]);

        return redirect()->route('pasien.index')
            ->with('success', 'Data pasien berhasil diperbarui.');
    }

    public function destroy(Pasien $pasien)
    {
        $pasien->delete();

        return redirect()->route('pasien.index')
            ->with('success', 'Data pasien berhasil dihapus.');
    }
}
