@extends('layouts.app')
@section('content')
<div class="d-flex align-items-center justify-content-between mb-3">
    <h1 class="h3 text-gray-800">Detail Rekam Medis</h1>
    <div>
        <a href="{{ route('rekam-medis.cetak', $rekam->id) }}" class="btn btn-secondary" target="_blank">Cetak</a>
        <a href="{{ route('rekam-medis.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>

<div class="card shadow">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>Pasien</th>
                    <td>{{ $rekam->pasien->nama }} ({{ $rekam->pasien->no_rm }})</td>
                </tr>
                <tr>
                    <th>Keluhan</th>
                    <td>{{ $rekam->pasien->keluhan ?? '-' }}</td>
                </tr>
                <tr>
                    <th>Dokter</th>
                    <td>{{ $rekam->dokter->nama }} ({{ $rekam->dokter->spesialis->nama_spesialis ?? '-' }})</td>
                </tr>
                <tr>
                    <th>Tanggal</th>
                    <td>{{ $rekam->tanggal }}</td>
                </tr>
                <tr>
                    <th>Diagnosa</th>
                    <td>{{ $rekam->diagnosa }}</td>
                </tr>
                <tr>
                    <th>Tindakan</th>
                    <td>{{ $rekam->tindakan }}</td>
                </tr>
                <tr>
                    <th>Resep</th>
                    <td>{{ $rekam->resep_obat }}</td>
                </tr>
                <tr>
                    <th>Tekanan Darah</th>
                    <td>{{ $rekam->tekanan_darah }}</td>
                </tr>
                <tr>
                    <th>Suhu</th>
                    <td>{{ $rekam->suhu_tubuh }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection