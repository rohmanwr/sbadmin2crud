<?php

namespace App\Http\Controllers;

use App\Models\RekamMedis;
use App\Models\Pasien;
use App\Models\Dokter;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class RekamMedisController extends Controller
{
    public function index()
    {
        $rekam = RekamMedis::with(['pasien', 'dokter'])->get();
        return view('rekam.index', compact('rekam'));
    }

    public function create()
    {
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        return view('rekam.create', compact('pasien', 'dokter'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pasien_id' => 'required',
            'dokter_id' => 'required',
            'tanggal' => 'required|date',
            'keluhan' => 'nullable',
            'diagnosa' => 'required',
            'tindakan' => 'required',
            'resep_obat' => 'nullable',
        ]);

        RekamMedis::create([
            'pasien_id' => $request->pasien_id,
            'dokter_id' => $request->dokter_id,
            'tanggal' => $request->tanggal,
            'keluhan' => $request->keluhan,
            'diagnosa' => $request->diagnosa,
            'tindakan' => $request->tindakan,
            'resep_obat' => $request->resep_obat,
        ]);

        return redirect()->route('rekam-medis.index')->with('success', 'Rekam medis berhasil ditambahkan');
    }

    public function edit($id)
    {
        $rekam = RekamMedis::findOrFail($id);
        $pasien = Pasien::all();
        $dokter = Dokter::all();
        return view('rekam.edit', compact('rekam', 'pasien', 'dokter'));
    }

    public function update(Request $request, $id)
    {
        $rekam = RekamMedis::findOrFail($id);

        $rekam->update([
            'pasien_id' => $request->pasien_id,
            'dokter_id' => $request->dokter_id,
            'tanggal' => $request->tanggal,
            'keluhan' => $request->keluhan,
            'diagnosa' => $request->diagnosa,
            'tindakan' => $request->tindakan,
            'resep_obat' => $request->resep_obat,
        ]);

        return redirect()->route('rekam-medis.index')->with('success', 'Rekam medis diperbarui');
    }

    public function destroy($id)
    {
        $rekam = RekamMedis::findOrFail($id);
        $rekam->delete();
        return redirect()->route('rekam-medis.index')->with('success', 'Rekam medis dihapus');
    }

    public function cetak($id)
    {
        $rekam = RekamMedis::with(['pasien', 'dokter'])->findOrFail($id);

        $pdf = Pdf::loadView('rekam.cetak', compact('rekam'))
            ->setPaper('A4', 'portrait');

        return $pdf->stream('rekam-medis-' . $rekam->id . '.pdf');
    }
}
