@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Rekam Medis</h1>

    <a href="{{ route('rekam-medis.create') }}" class="btn btn-primary mb-3">+ Tambah Rekam Medis</a>

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pasien</th>
                        <th>Keluhan (Pasien)</th>
                        <th>Dokter</th>
                        <th>Tanggal</th>
                        <th>Diagnosa</th>
                        <th>Tindakan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($rekam as $r)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $r->pasien->nama }}</td>

                        <!-- Ambil keluhan dari tabel pasien -->
                        <td>{{ $r->pasien->keluhan ?? '-' }}</td>

                        <td>{{ $r->dokter->nama }}</td>
                        <td>{{ $r->tanggal }}</td>
                        <td>{{ $r->diagnosa }}</td>
                        <td>{{ $r->tindakan }}</td>

                        <td>
                            <a href="{{ route('rekam-medis.edit', $r->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('rekam-medis.destroy', $r->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                            </form>

                            <a href="{{ route('rekam-medis.cetak', $r->id) }}"
                                class="btn btn-secondary btn-sm" target="_blank">
                                Cetak PDF
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

        </div>
    </div>
    @endsection