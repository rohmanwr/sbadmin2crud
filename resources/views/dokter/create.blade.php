@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Tambah Dokter</h3>

    <form action="{{ route('dokter.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label>Nama Dokter</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="form-group mb-3">
            <label>Spesialis</label>
            <select name="spesialis_id" class="form-control" required>
                <option value="">-- pilih spesialis --</option>
                @foreach($spesialis as $s)
                <option value="{{ $s->id }}">{{ $s->nama_spesialis }}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group mb-3">
            <label>No Telepon</label>
            <input type="text" name="telepon" class="form-control">
        </div>

        <button class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection