@extends('layouts.app')
@section('content')
<div class="d-flex align-items-center justify-content-between mb-3">
    <h1 class="h3 text-gray-800">Detail Pasien</h1>
    <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Kembali</a>
</div>

<div class="card shadow">
    <div class="card-body">
        <table class="table table-borderless">
            <tr>
                <th>No RM</th>
                <td>{{ $pasien->no_rm }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $pasien->nama }}</td>
            </tr>
            <tr>
                <th>Keluhan</th>
                <td>{{ $pasien->keluhan }}</td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>{{ $pasien->alamat }}</td>
            </tr>
            <tr>
                <th>Telepon</th>
                <td>{{ $pasien->no_hp }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection