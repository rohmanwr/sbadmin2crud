@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Edit Metode Pembayaran</h4>

    <form action="{{ route('metode.update', $metode->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label><b>Jenis Pembayaran:</b></label><br>

        <label>
            <input type="radio" name="jenis" value="umum"
                {{ $metode->jenis == 'umum' ? 'checked' : '' }}>
            Umum
        </label><br>

        <label>
            <input type="radio" name="jenis" value="asuransi"
                {{ $metode->jenis == 'asuransi' ? 'checked' : '' }}>
            Asuransi
        </label><br>

        <label>
            <input type="radio" name="jenis" value="karyawan"
                {{ $metode->jenis == 'karyawan' ? 'checked' : '' }}>
            Karyawan
        </label><br>

        <label>
            <input type="radio" name="jenis" value="bpjs"
                {{ $metode->jenis == 'bpjs' ? 'checked' : '' }}>
            BPJS
        </label><br><br>

        <div class="form-group">
            <label>Nama Metode Pembayaran</label>
            <input type="text" name="nama_metode" class="form-control"
                value="{{ $metode->nama_metode }}">
        </div>

        <div class="form-group mt-2">
            <label>Nomor Kartu</label>
            <input type="text" name="nomor_kartu" class="form-control"
                value="{{ $metode->nomor_kartu }}">
        </div>

        <div class="form-group mt-2">
            <label>Kelas Perawatan</label>
            <input type="text" name="kelas_perawatan" class="form-control"
                value="{{ $metode->kelas_perawatan }}">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update</button>
        <a href="{{ route('metode.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </form>

</div>
@endsection