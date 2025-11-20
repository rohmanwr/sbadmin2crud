@extends('layouts.app')

@section('content')
<div class="container">
    <h4>Tambah Metode Pembayaran</h4>

    <form action="{{ route('metode.store') }}" method="POST">
        @csrf

        <label><b>Jenis Pembayaran:</b></label><br>

        <label><input type="radio" name="jenis" value="umum" required> Umum</label><br>
        <label><input type="radio" name="jenis" value="asuransi"> Asuransi</label><br>
        <label><input type="radio" name="jenis" value="karyawan"> Karyawan</label><br>
        <label><input type="radio" name="jenis" value="bpjs"> BPJS</label><br><br>

        <div class="form-group">
            <label>Nama Metode Pembayaran</label>
            <input type="text" name="nama_metode" class="form-control">
        </div>

        <div class="form-group">
            <label>Nomor Kartu</label>
            <input type="text" name="nomor_kartu" class="form-control">
        </div>

        <div class="form-group">
            <label>Kelas Perawatan</label>
            <input type="text" name="kelas_perawatan" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
    </form>

</div>
@endsection