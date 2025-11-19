@extends('layouts.app')
@section('content')
<div class="container">

    <h3>Tambah Rekam Medis</h3>

    <form action="{{ route('rekam-medis.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label>Pasien</label>
            <select name="pasien_id" class="form-control" required>
                <option value="">-- pilih pasien --</option>
                @foreach ($pasien as $p)
                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label>Dokter</label>
            <select name="dokter_id" class="form-control" required>
                <option value="">-- pilih dokter --</option>
                @foreach ($dokter as $d)
                <option value="{{ $d->id }}">{{ $d->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Tanggal Periksa</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>


        <div class="form-group mb-3">
            <label>Diagnosa</label>
            <textarea name="diagnosa" class="form-control"></textarea>
        </div>

        <div class="form-group mb-3">
            <label>Tindakan</label>
            <textarea name="tindakan" class="form-control"></textarea>
        </div>

        <button class="btn btn-primary">Simpan</button>

    </form>

</div>
@endsection